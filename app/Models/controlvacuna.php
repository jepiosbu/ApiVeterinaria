<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class controlvacuna extends Model
{
    use HasFactory;
    public function vacuna(){
        return $this->belongsTo(vacuna::class);
    }

    public function mascota(){
        return $this->belongsTo(mascota::class);
    }
}
