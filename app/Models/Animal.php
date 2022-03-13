<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public function specie(){
        return $this->belongsTo(Specie::class);
    }

    public function portada(){
        $portada = Image::where('portada', 1)->where('imageable_id', $this->id)->first();
        return $portada;
    }
}
