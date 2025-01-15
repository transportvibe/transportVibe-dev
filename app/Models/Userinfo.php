<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    use HasFactory;
    protected $table="user_infos";

    protected $fillable = [
        'user_id',
        'website',
        'company_name',
        'job_title',
        'email',
        'number_of_employees',
        'annual_revenue',
    ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
