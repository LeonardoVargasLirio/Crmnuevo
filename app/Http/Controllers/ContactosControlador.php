<?php

namespace App\Http\Controllers;

use App\Models\Administradores;
use App\Models\Contactos;
use App\Models\Usuario;
use Illuminate\Http\Request;


class ContactosControlador extends Controller
{

    public function vertodoscontactos(){

        $contactos = Contactos::where('estado','=',1)->get();

        $contactosPorDia = Contactos::selectRaw('DATE(created_at) as fecha, count(*) as cantidad')
            ->where('estado', 1)
            ->groupBy('fecha')
            ->get();

        return view('contactos.vertodos',compact('contactos','contactosPorDia'));

    }

    public function nuevocontacto(){

        $usuario = Usuario::class::where('estado','=',1)->get();
            return view('contactos.nuevo', compact("usuario"));

           // ******************************
       /* $administradores = Administradores::where('estado','=',1)->get();

      return view('contactos.nuevo',compact('administradores'));*/

    }


    public function guardarcontacto(Request $request){

        //dd($request);

        $datos = $request->datos;

        $contactos = new Contactos();
        $contactos->nombre = $datos["nombre"];
        $contactos->apellido = $datos["apellido"];
        $contactos->direccion = $datos["direccion"];
        $contactos->id_usuario = $datos["id_usuario"];
        $contactos->telefono = $datos["telefono"];
        $contactos->etiqueta = $datos["etiqueta"];
        $contactos->fuente = $datos["fuente"];
        // $contactos->id_administrador = $datos["id_administrador"];
        $contactos->save();
        return ["respuesta" => true];
    }

}
