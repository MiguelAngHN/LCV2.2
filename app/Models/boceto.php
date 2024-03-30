<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\multimedia;

class boceto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_boceto', 'url', 'multimedia_id'];

    public function multimedia(){
        return $this->belongsTo(multimedia::class);
    }
}
