<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{

    use SoftDeletes ; 
    
    use HasApiTokens, HasFactory, Notifiable;

    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }

    public function sales(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'name',
        'email',
        'address',
        'title',
        'city' ,
        'contact_num_one' ,
        'contact_num_two' ,
        'project' ,
        'hiring_date' ,
        'role' ,
        'password' , 
        'profile_picture'


    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
