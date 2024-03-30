<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\boceto;
use App\Models\tema;

class multimedia extends Model
{
    use HasFactory;

    protected $fillable = ['url'];

    public function actividads(){
        return $this->hasMany('App\Models\actividad');
    }

    public function boceto() {
        return $this->hasOne(boceto::class);
    }
    public function tema() {
        return $this->hasOne(tema::class);
    }

}
