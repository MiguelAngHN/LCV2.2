<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// use Illuminate\Contracts\Auth\Authenticatable;

class usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    public function seccions(){
        return $this->hasMany(Seccion::class);
    }
    
   public function actividads(){
    return $this->hasMany('App\Models\actividad');
   }

   protected $fillable = ['nombre_usuario', 'email', 'password', 'rol'];

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
