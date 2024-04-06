<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\multimedia;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class tema extends Model
{
    
    use HasApiTokens, HasFactory, Notifiable;

    public function seccion(){
        return $this->belongsTo('App\Models\seccion');
    }
    public function actividads(){
        return $this->belongsTo('App\Models\actividad');
    }
    public function multimedia(){
        return $this->belongsTo(multimedia::class);
    }
    
    protected $fillable = ['nombre_tema', 'descripcion', 'url_imagen', 'seccion_id'];
}
