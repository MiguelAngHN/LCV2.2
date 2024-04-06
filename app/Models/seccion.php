<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class seccion extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    
    public function usuarios (){
        return $this->belongsTo('App\Models\seccion');
    }

    protected $fillable = ['nombre_seccion', 'user_id'];
   
    // public function temas(){
    //     return $this->hasMany('App\Models\tema');
    // }
    
    }
    
