<?php

namespace App\Http\Controllers;



use App\Models\Actividades;
use App\Models\Administradores;
use Illuminate\Http\Request;

class ActividadesControlador extends Controller
{

    public function vertodos(){

        $actividades = Actividades::where('estado','=',1)->get();

        return view('actividades.vertodos',compact('actividades'));
    }

    public function nuevaactividad(){


        $administradores = Administradores::where('estado','=',1)->get();
        $contactos = Administradores::where('estado','=',1)->get();

        return view('actividades.nuevo',compact('administradores','contactos'));
    }


    public function guardaractividad(Request $request){

        //dd($request);

        $datos = $request->datos;

        $actividades = new Actividades();
        //$actividades->id_empresa = $datos["id_empresa"];
        $actividades->id_administrador = $datos["id_administrador"];
        //$actividades->id_contacto = $datos["id_contacto"];
        $actividades->titulo = $datos["titulo"];
        $actividades->tipo_actividad = $datos["tipo_actividad"];
        $actividades->fecha_vencimiento = $datos["fecha_vencimiento"];
        $actividades->save();

        return ["respuesta" => true];


    }

}
