<?php

namespace App\Http\Controllers;

use App\Models\Actividades;
use App\Models\Productos;
use App\Models\Administradores;
use Illuminate\Http\Request;

class ProductosControlador extends Controller
{

    public function vertodosproductos(){


        $productos = Productos::where('estado','=',1)->get();

        return view('productos.vertodos',compact('productos'));
    }

    public function nuevoproducto(){

        $administradores = Administradores::where('estado','=',1)->get();
        $productos = Administradores::where('estado','=',1)->get();

        return view('productos.nuevo',compact('administradores','productos'));
    }


    public function guardarproducto(Request $request){

        //dd($request);
        $datos = $request->datos;
        $productos = new Productos();
        $productos->codigo = $datos["codigo"];
        $productos->nombre = $datos["nombre"];
        $productos->descripcion = $datos["descripcion"];
        $productos->precio = $datos["precio_unitario"];
        $productos->costo = $datos["costo_unitario"];
        $productos->save();

        return ["respuesta" => true];


    }

}


