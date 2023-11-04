<?php

namespace Database\Seeders;

use App\Models\cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class seedcliente extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cliente= new cliente();
        $cliente->Cname="Jean Ospino";
        $cliente->correo="jepiosbu@gmail.com";
        $cliente->password="1010113372";
        $cliente->save();
    }
}
