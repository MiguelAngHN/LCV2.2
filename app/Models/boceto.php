<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\multimedia;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class boceto extends Model
{
    use HasApiTokens,HasFactory, Notifiable;

    protected $fillable = ['nombre_boceto', 'url'];

    // public function multimedia(){
    //     return $this->belongsTo(multimedia::class);
    // }
}
