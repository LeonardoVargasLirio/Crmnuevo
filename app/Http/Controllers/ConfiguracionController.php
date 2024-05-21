<?php

namespace App\Http\Controllers;

use App\Models\Etapas;
use App\Models\Llamadas;
use App\Models\TipoActividades;
use App\Models\Tuberias;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ConfiguracionController extends Controller
{


    public function guardarusuario(Request $request){
        $nombre_usuario = $request->nombre_usuario;
        $correo_usuario = $request->correo_usuario;
        $contrasena = $request->contrasena;
        $tipo_usuario = $request->tipo_usuario;
        $celular_usuario = $request->celular_usuario;
        $cargo_usuario = $request->cargo_usuario;


        $usuario = new Usuario();
        $usuario->correo = $correo_usuario;
        $usuario->contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
        $usuario->verificacioncorreo = $correo_usuario;
        $usuario->nombre = $nombre_usuario;
        $usuario->celular = $celular_usuario;
        $usuario->cargo = $cargo_usuario;
        $usuario->tipo = $tipo_usuario;
        $usuario->save();

        return ["respuesta" => true];

    }

    public function eliminarusuario(Request $request){
        $id_usuario = $request->id_usuario;

        $usuario = Usuario::where('id','=', $id_usuario)
            ->where('estado','=',1)
            ->first();

        if($usuario){
            $usuario->estado = 2;
            $usuario->save();

            return ['respuesta'=>true];
        }else{

            return [
                'respuesta'=>false,
                "error" => "No Existe Tipo Actividad"
            ];

        }

    }


    public function eliminarllamada(Request $request){

        $id_llamada = $request->id_llamada;

        $llamadaconsulta = Llamadas::where('id','=', $id_llamada)
            ->where('estado','=',1)
            ->first();

        if($llamadaconsulta){
            $llamadaconsulta->estado = 2;
            $llamadaconsulta->save();

            return ['respuesta'=>true];
        }else{

            return [
                'respuesta'=>false,
                "error" => "No Existe llamada"
            ];

        }



    }

    public function guardarllamada(Request $request){

        //dd($request);

        $nombre = $request->nombrellamada;
        $color = $request->colorllamada;


        $llamadas = new Llamadas();
        $llamadas->nombre = $nombre;
        $llamadas->color = $color;
        $llamadas->save();

        return ["respuesta" => true];



    }


    public function eliminaretiqueta(Request $request){

        $id_etiqueta = $request->id_etiqueta;

        $tipoactividad = TipoActividades::where('id','=', $id_etiqueta)
            ->where('estado','=',1)
            ->first();

        if($tipoactividad){
            $tipoactividad->estado = 2;
            $tipoactividad->save();

            return ['respuesta'=>true];
        }else{

            return [
                'respuesta'=>false,
                "error" => "No Existe Tipo Actividad"
            ];

        }



    }

    public function vertodosconfiguracion(Request $request)
    {
        $etiquetas = TipoActividades::where('estado', '=', 1)->get();
        $llamadas = Llamadas::where('estado', '=', 1)->get();
        $tuberias = Tuberias::where('estado', '=', 1)->get();
        $usuarios = Usuario::where('estado', '=', 1)->get();

        return view('configuracion.vertodos', compact('etiquetas', 'tuberias','llamadas','usuarios'));
    }

    public function guardaretiquetaactividad(Request $request)
    {

        $eti_actividad = new TipoActividades();
        $eti_actividad->nombre = $request->nombre;
        $eti_actividad->icono = $request->icono;
        $eti_actividad->save();

        return ["respuesta" => true];
    }


    public function guardartuberia(Request $request)
    {

        $nombretuberia = $request->nombretuberia;

        $tuberia = new Tuberias();
        $tuberia->nombre = $nombretuberia;
        $tuberia->defecto = 1;
        $tuberia->save();

        return ["respuesta" => true];

    }


    public function guardaretapa(Request $request)
    {

       // dd($request);
        $id_tuberia = $request->id_tuberia;
        $probabilidad = $request->probabilidad;
        $nombreetapa = $request->nombreetapa;


        $etapas = new Etapas();
        $etapas->id_tuberia = $id_tuberia;
        $etapas->nombre = $nombreetapa;
        $etapas->probabilidad = $probabilidad;
        $etapas->orden = 1;
        $etapas->save();

        return ["respuesta" => true];

    }


    public function obteneretapas(Request $request){

        $id_tuberia = $request->id_tuberia;

        $etapas = Etapas::where('estado', '=', 1)
            ->where('id_tuberia','=',$id_tuberia)
            ->get();

        return ["respuesta"=>true,"etapas"=>$etapas];

    }



}
