<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mascota extends Model
{
    use HasFactory;

    public function tipo_mascota(){
        return $this->belongsTo(tipo_mascota::class);
    }

    public function cliente(){
        return $this->belongsTo(cliente::class);
    }
}
