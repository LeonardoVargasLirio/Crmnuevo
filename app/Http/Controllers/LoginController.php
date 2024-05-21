<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{

    public function principal()
    {
        if (session()->has('id_usuario')) {
            return view('principal');
        } else {
            return redirect()->route('iniciarsesion')->with('error', 'Debe iniciar sesión para acceder a la página principal.');
        }
    }

    public function iniciarsesion()
    {
        return view('login/iniciarsesion');
    }

    public function registro(){

        return view('login.registro');

    }

    public function ingreso(Request $request)
    {

        $correo = $request->input('correo');
        $contrasena = $request->input('contrasena');

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            return redirect()->route('iniciarsesion')->with('error', 'El correo electrónico ingresado no es válido');
        }

        if($correo == ""){
            return redirect()->route('iniciarsesion')->with('error', 'Ingrese un Correo Electronico');
        }

        if($contrasena == ""){
            return redirect()->route('iniciarsesion')->with('error', 'Ingrese una Contrasena');
        }


        $usuario = Usuario::where('correo', $correo)->first();


        if ($usuario && password_verify($contrasena, $usuario->contrasena)) {

            if($usuario->tipo == 1){
                session(['id_administrador' => $usuario->id]);
                session(['tipo_usuario' => "administrador"]);
                session(['id_usuario' => $usuario->id]);
            }else{

                session(['id_usuario' => $usuario->id]);
                session(['tipo_usuario' => "vendedor"]);

            }




            return redirect()->intended('/principal');

        }

        return redirect()->route('iniciarsesion')->with('error', 'Credenciales inválidas, por favor intente de nuevo.');
    }

    public function guardar_registro(Request $request){

        $correo = $request->input('correo');
        $contrasena = $request->input('contrasena');
        $confirmacontrasena = $request->input('confirmacontrasena');

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {

            return redirect()->route('registro')->with('error', 'El correo electrónico ingresado no es válido');

        }



        if($correo == ""){
            return redirect()->route('registro')->with('error', 'Ingrese un Correo Electronico');
        }

        if($contrasena == ""){
            return redirect()->route('registro')->with('error', 'Ingrese una Contrasena');
        }

        if($confirmacontrasena == ""){
            return redirect()->route('registro')->with('error', 'Ingrese una la Confirmacion de la Contrasena');
        }

        if ($contrasena !== $confirmacontrasena) {
            return redirect()->route('registro')->with('error', 'Las contraseñas no coinciden');
        }


        $consulta = Usuario::where('correo', $correo)->first();

        if($consulta){
            return redirect()->route('registro')->with('error', 'Ya existe un Usuario con este correo.');
        }

        $registro =  new Usuario();
        $registro->nombre =  $correo;
        $registro->correo =  $correo;
        $registro->verificacioncorreo =  $correo;
        $registro->contrasena =   password_hash($contrasena, PASSWORD_DEFAULT);
        $registro->save();

        return redirect()->route('iniciarsesion');

    }

    public function cerrarsession()
    {
        Session::forget('id_usuario');

        return redirect('/iniciarsesion');
    }





}
