<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actividad extends Model
{
    use HasFactory;
    public function tema(){
        return $this->belongsTo('App\Models\tema');
    }
    public function dibujos(){
        return $this->hasMany('App\Models\dibujo');
    }
    public function images(){
        return $this->hasMany('App\Models\image', 'imagetable');
    }
   
}
