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

    public function usuario(){
        return $this->belongsTo('App\Models\usuario');
    }

    public function tipo(){
        return $this->belongsTo('App\Models\tipo');
    }

    public function multimedia(){
        return $this->belongsTo('App\Models\multimedia');
    }

}