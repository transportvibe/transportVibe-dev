<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function authenticated()
    {   
        session_start();
        $endPoint = 'admin.dashboard';
        if ($_POST['email'] === 'jipe@mailinator.com')
        {
            $_SESSION['user_role'] = 'users';
            $endPoint = 'user.dashboard'; 
        }
        return redirect()->route($endPoint);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)
                    ->where('password', Hash::make($request->password))->get();
        dd($user);

        // Attempt to log in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Regenerate session to prevent fixation attacks
            $request->session()->regenerate();

            return redirect()->intended('default_dashboard'); // Redirect to the intended page
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

     // Redirect to Facebook for authentication
     public function redirectToFacebook()
     {
         return Socialite::driver('facebook')->scopes(['email'])->redirect();
     }
 
     // Handle Facebook callback
     public function handleFacebookCallback()
     {
        try {
             // Retrieve user data from Facebook
             $facebookUser = Socialite::driver('facebook')->user();
 
             // Check if the user already exists in the database
            //  $existingUser = User::where('facebook_id', $facebookUser->id)->first();
 
            //  if ($existingUser) {
            //      // Log in the existing user
            //      Auth::login($existingUser);
            //  } else {
                 // Create a new user if not already registered
                 $user = User::UpdateOrCreate([
                    'facebook_id' => $facebookUser->id,
                 ], [
                     'name' => $facebookUser->name,
                     'email' => $facebookUser->email ?? null, // Handle cases where email is not returned
                     'password' => bcrypt('facebooklogin'), // Random password
                 ]);
 
                 // Log in the new user
                 Auth::login($user);
            // }
 
             // Redirect to the dashboard or home page
             return redirect('/users/dashboard')->with('success', 'Logged in successfully via Facebook!');
         } catch (\Exception $e) {
 
             // Redirect back to login with an error message
             return redirect('/auth/facebook')->withErrors(['error' => 'Failed to log in via Facebook or User already exit. Please try again.']);
         }
     }


public function redirectToApple()
{
    return Socialite::driver('apple')->redirect();
}

public function handleAppleCallback()
{
    // try {
        $user = Socialite::driver('apple')->user();
dd($user);
        // Handle user data (e.g., log the user in or create a new user)
        // Example:
        $existingUser = User::where('apple_id', $user->getId())->first();
        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            $newUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'apple_id' => $user->getId(),
                'password' => bcrypt('password'), // Generate a random password
            ]);
            Auth::login($newUser);
        }

        return redirect('/dashboard'); // Redirect after successful login
    // } catch (Exception $e) {
       // return redirect('/login')->withErrors(['error' => 'Failed to log in via Apple. Please try again.']);
    // }
}
}
