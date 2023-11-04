<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\controlvacuna;
use App\Models\mascota;
use App\Models\tipo_mascota;
use App\Models\vacuna;
use Illuminate\Http\Request;


class TipoMascotaController extends Controller
{
    public function getusuario()
    {
        $cliente= cliente::all();
        return $cliente;
    }
    public function postusuario(Request $request)
    {
        $cliente= new cliente();
        $cliente->Cname = $request->Cname;
        $cliente->correo = $request->correo;
        $cliente->password = $request->password;
        $cliente->save();
    }

    public function gettmascota()
    {
        $tmascota= tipo_mascota::all();
        return $tmascota;
    }

    public function getvacuna()
    {
        $vacuna= vacuna::all();
        return $vacuna;
    }

    public function getmascotas($id)
    {
        $mascotas = mascota::where('cliente_id','=',$id)->get();
        return $mascotas;
    }

    public function postmascota(Request $request)
    {
        $mascota= new mascota();
        $mascota->Mname=$request->Mname;
        $mascota->edad=$request->edad;
        $mascota->tipo_mascota_id=$request->tipo_mascota_id;
        $mascota->cliente_id=$request->cliente_id;
        $mascota->save();
    }

    public function postcontrol(Request $request)
    {                                                                  
        $control = new controlvacuna();
        $control->mascota_id=$request->mascota_id;
        $control->vacuna_id=$request->vacuna_id;
        $control->save();
    }

    public function getregistros($id){
        $registros=controlvacuna::select('controlvacunas.id','mascotas.Mname','vacunas.Vname')
        ->join('mascotas','controlvacunas.mascota_id','=','mascotas.id')
        ->join('vacunas','controlvacunas.vacuna_id','=','vacunas.id')
        ->join('clientes','mascotas.cliente_id','=','clientes.id')
        ->where('clientes.id','=',$id)
        ->get();
        return $registros;
    }
}
