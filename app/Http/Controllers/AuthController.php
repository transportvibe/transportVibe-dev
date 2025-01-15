<?php 
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Userinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    // Register Method
    public function register(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'phone_number' => 'required|string|max:15',
            'country' => 'required|string|max:300',
            'calling_code' => 'required|string|max:100',
            'website' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'employees' => 'required|string|max:255',
            'annual_revenue' => 'required|string|max:50',
        ]);
        

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

         // Save User Data
         $user = User::create([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'location' => $request->country,
            'country_code' => $request->calling_code
        ]);


        // Generate JWT token
        $token = JWTAuth::fromUser($user);

          // Save Additional User Info
          Userinfo::create([
            'user_id' => $user->id,
            'website' => $request->website,
            'company_name' => $request->company_name,
            'job_title' => $request->job_title,
            'email' => $request->email,
            'number_of_employees' => $request->employees,
            'annual_revenue' => $request->annual_revenue,
        ]);

         // Return response with user and token
         return response()->json([
            'message' => 'User registered successfully',
            'token' => $token
        ]);
    }

    // Login Method
    public function login(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Attempt to authenticate user
        if (!$token = JWTAuth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Return response with token
        return response()->json([
            "message" => "User logged in successfully",
            'token' => $token
        ]);
    }

    // Logout Method
    public function logout(Request $request)
    {
        // Invalidate the current token
        JWTAuth::invalidate(JWTAuth::getToken());

        return response()->json(['message' => 'Logged out successfully']);
    }
}
