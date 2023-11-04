<?php

namespace Database\Seeders;

use App\Models\tipo_mascota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class seedmascota extends Seeder
{
    
    public function run(): void
    {
        $mascotas=['gatos','perros','caballos','conejos','loros','serpientes'];
        foreach ($mascotas as $key) {
             $tmascota= new tipo_mascota();
             $tmascota->Tname=$key;
             $tmascota->save();
        }
    }
}
