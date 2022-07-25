<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'avatar',
        'nui',
        'age',
        'name',
        'last_name',
        'gender',
        'phone',
        'status',
        'email',
        'password',
    ];

    public function scopeUsers($query)
    {
       // return $query->select("users.*",DB::raw("CONCAT(users.name,' ',users.last_name) as fullName"))->get(); //mysql
       return $query->select("users.*",DB::raw("CONCAT(users.name,' ',users.last_name) as fullname"))->get();//postgrest
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'roles','created_at',
        'updated_at','email_verified_at','deleted_at'
    ];
    

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
