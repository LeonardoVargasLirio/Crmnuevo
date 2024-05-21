<?php

namespace App\Http\Controllers;

use App\Models\Etapas;
use App\Models\Ofertas;
use App\Models\Tuberias;
use Illuminate\Http\Request;

class OfertasControlador extends Controller
{


    public function nuevoperfil()
    {

        return view('ofertas.nuevo');

    }


    public function verofertas(Request $request)
    {
        //dd($request);



        $vista = $request->input('vista');


        if($vista == 'lista'){

            $datos = Ofertas::where('estado', '=', 1)->get();

        }else if($vista == 'tablero'){

            $tuberias = Tuberias::where('id', '=', $request->id_tuberia)
                ->where('estado','=',1)
                ->first();
            if($tuberias){
                $datos = Etapas::where('estado', '=', 1)
                    ->where('id_tuberia', '=', $tuberias->id)
                    ->get();
            }else{
                $datos = Etapas::where('estado', '=', 1)
                    ->where('id_tuberia', '=', 1)
                    ->get();
            }

            //dd($tuberias);



        }else{
            $datos =[];
        }

        return view('ofertas.vertodos', compact( 'datos','vista'));

    }


    public function obteneroferta(Request $request)
    {

        //dd($request); 7541

        $id_tuberia = $request->id_tuberia;

        $etapas = Ofertas::where('estado', '=', 1)
            ->where('id_tuberia', '=', $id_tuberia)
            ->get();

        return ['respuesta' => true, 'etapas' => $etapas];


    }


    public function obtenerencabezado(Request $request)
    {

        $id_encabezado = $request->id_encabezado;

        if ($id_encabezado == 1) {

            $ofertas = Ofertas::where('estado', '=', 1)->get();


            $encabezadoglobal = [
                'ofertas' => $ofertas,
                'id_encabezado' => $id_encabezado
            ];


        } else if ($id_encabezado == 2) {

            $id_tuberia = 1;

            $ofertas = Ofertas::where('estado', '=', 1)->get();

            if ($id_tuberia != 0 or $id_tuberia != "") {

                $etapas = Etapas::where('estado', '=', 1)
                    ->where('id_tuberia', '=', $id_tuberia)
                    ->get();

                $encabezadoglobal = [
                    'etapas' => $etapas,
                    'ofertas' => $ofertas,
                    'id_encabezado' => $id_encabezado
                ];
            } else {

                $encabezadoglobal = [
                    'etapas' => [],
                    'ofertas' => $ofertas,
                    'id_encabezado' => $id_encabezado
                ];

            }

        }


        return ['respuesta' => true, 'encabezadoglobal' => $encabezadoglobal];


    }


}
