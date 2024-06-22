<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
/*Controlador Motor Pruebas*/
class MotorPruebas extends Controller
{

    public function ejecutar(Request $request){


        /*Schema::dropIfExists('Actividades');
        Schema::dropIfExists('Administradores');
        Schema::dropIfExists('Contactos');
        Schema::dropIfExists('Productos');
        Schema::dropIfExists('Tipo_actividades');
        Schema::dropIfExists('Usuarios');*/


        Schema::dropIfExists('Usuarios');


        Schema::create('Usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('correo',250)->nullable();
            $table->string('contrasena');
            $table->string('verificacioncorreo')->nullable();
            $table->string('nombre',250)->nullable();
            $table->string('celular',250)->nullable();
            $table->string('cargo',250)->nullable();
            $table->string('tipo')->default(0);
            $table->string('estado')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });

        dd('fin_actualizacion');



        Schema::create('Llamadas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('color')->nullable();
            $table->integer('estado')->default(1);
            $table->timestamps();
        });

        dd('fin_creacion');


        Schema::create('TipoActividades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('color')->nullable();
            $table->string('icono')->nullable();
            $table->string('tipo')->nullable();//1 llamar , 2 correo , 3 reunion etc
            $table->integer('estado')->default(1);
            $table->timestamps();
        });







        Schema::create('Tuberias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('defecto');
            $table->integer('estado')->default(1);
            $table->timestamps();
        });




        Schema::create('Ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario');
            $table->integer('id_tuberia');
            $table->integer('id_etapa');
            $table->string('nombre',250)->nullable();
            $table->integer('cantidad')->nullable();
            $table->integer('estado')->default(1);
            $table->timestamps();
        });





        Schema::create('Etapas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tuberia');
            $table->string('nombre',250)->nullable();
            $table->string('probabilidad',250)->nullable();
            $table->integer('orden')->nullable();
            $table->integer('estado')->default(1);
            $table->timestamps();
        });


        Schema::create('Empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->nullable();
            $table->date('fechaasignacion');
            $table->integer('id_fuente')->nullable();
            $table->string('nombre',250)->nullable();
            $table->string('correoelectronico',250)->nullable();
            $table->string('direccion',250)->nullable();
            $table->integer('estado')->default(1);
            $table->timestamps();
        });


        Schema::create('Estado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',250)->nullable();
            $table->string('color',250)->nullable();
            $table->integer('estado')->default(1);
            $table->timestamps();
        });




        Schema::create('Productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',250)->nullable();
            $table->string('nombre',250)->nullable();
            $table->string('descripcion',250)->nullable();
            $table->double('precio')->nullable();
            $table->double('costo')->nullable();
            $table->integer('estado')->default(1);
            $table->timestamps();
        });






        Schema::create('Contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_administrador')->nullable();
            $table->string('nombre',250)->nullable();
            $table->integer('id_usuario')->nullable();
            $table->string('correo',250)->nullable();
            $table->string('apellido',250)->nullable();
            $table->string('direccion',250)->nullable();
            $table->string('telefono',250)->nullable();
            $table->string('etiqueta')->nullable();
            $table->string('fuente')->nullable();
            $table->integer('estado')->default(1);
            $table->timestamps();
        });




        Schema::create('Administradores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario',250)->nullable();
            $table->string('contrasena',250)->nullable();
            $table->string('nombres',250)->nullable();
            $table->integer('estado')->default(1);
            $table->timestamps();
        });


        Schema::create('Actividades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_empresa')->nullable();
            $table->integer('id_administrador')->nullable();
            $table->integer('id_contacto')->nullable();
            $table->string('titulo',250)->nullable();
            $table->string('tipo_actividad',250)->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->integer('estado')->default(1);
            $table->timestamps();
        });




        Schema::create('Usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',250)->nullable();
            $table->string('correo',250)->nullable();
            $table->string('verificacioncorreo')->nullable();
            $table->string('contrasena');
            $table->rememberToken();
            $table->timestamps();
        });

        dd('Fin_actualizado');

        dd('Fin_actualizado2');

        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',300)->nullable();
            $table->string('ruta',300)->nullable();
            $table->string('icono',300)->nullable();
            $table->string('icono2',300)->nullable();
            $table->integer('padre')->nullable();
            $table->integer('orden')->nullable();
            $table->integer('estado')->nullable();
            $table->integer('demo')->nullable();
            $table->integer('vendedor')->nullable();
            $table->integer('webmaster')->nullable();
            $table->string('permiso1',300)->nullable();
            $table->string('permiso2',300)->nullable();
            $table->string('permiso3',300)->nullable();
            $table->string('parametro1',300)->nullable();
            $table->string('parametro2',300)->nullable();
            $table->timestamps();
        });






    }

}
