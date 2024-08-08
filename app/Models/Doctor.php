<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Doctor extends Authenticatable
{
    use HasFactory;

    protected $table ="doctor";
    protected $fillable = [
        'specialty_id',
        'name',
        'qualification',
        'experience',
        'email',
        'password',
        
    ];


  /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
   protected $hidden = [
       'password',
   ];

    public $timestamps = true;
}
