<?php

namespace App\Http\Controllers;

use App\Models\Administradores;
use App\Models\Empresas;

class EmpresasController extends Controller
{

    /*Empresas hace referencia al MODELO EMPRESAS*/
    public function verempresas(){
        $empresa = Empresas::where('estado','=',1)->get();
        return view('empresas.vertodos',compact('empresa'));
        /*retorno como parametro el nombre del directorio empresas seguidamente del nombre de la plantilla vertodos.blade*/
    }
    public function crearempresa(){
        $administradores = Administradores::where('estado','=',1)->get();
        $empresas = Administradores::where('estado','=',1)->get();
        return view('empresas.nuevo',compact('administradores','empresas'));
    }
    public function guardarempresa(Request $request)
{
    //dd($request);
        $datos = $request->datos;
        $empresa = new Empresas();
        $empresa->id_usuario = $datos['id_usuario'];
        $empresa->fechaasignacion = $datos['fechaasignacion'];
        $empresa->id_fuente = $datos['id_fuente'];
        $empresa->nombre = $datos['nombre'];
        $empresa->correo = $datos['correoelectronico'];
        $empresa->direccion = $datos['direccion'];
        $empresa->save();
        return ['respuesta'=>true];

}

}
