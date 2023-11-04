<?php

namespace Database\Seeders;

use App\Models\vacuna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class seedvacuna extends Seeder
{
    
    public function run(): void
    {
        $vacunas=['parvovirosis','rabia','moquillo','leptospirosis','coronavirus'];
        foreach ($vacunas as $key) {
            $vacuna= new vacuna();
            $vacuna->Vname=$key;
            $vacuna->save();
        }
    }
}
