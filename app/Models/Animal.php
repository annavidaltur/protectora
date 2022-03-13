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
        $image = Image::where('portada', 1)->where('imageable', $this->id);
        return $image;
    }
}
