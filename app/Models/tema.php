<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\multimedia;

class tema extends Model
{
    protected $fillable = ['nombre_tema', 'descripcion', 'url_imagen', 'seccion_id', 'multimedia_id'];

    use HasFactory;

    public function seccion(){
        return $this->belongsTo('App\Models\seccion');
    }
    public function actividads(){
        return $this->belongsTo('App\Models\actividad');
    }
    public function multimedia(){
        return $this->belongsTo(multimedia::class);
    }
}
