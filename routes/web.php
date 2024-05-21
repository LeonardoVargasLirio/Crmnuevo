<?php

use App\Http\Controllers\ActividadesControlador;
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\ContactosControlador;
use App\Http\Controllers\OfertasControlador;
use App\Http\Controllers\ProductosControlador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotorPruebas;
use App\Http\Controllers\documentosControlador;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\LoginController;



Route::get('/', function () {
    return view('login/iniciarsesion');
});


Route::any('/iniciarsesion', [LoginController::class, 'iniciarsesion'])->name('iniciarsesion');
Route::any('/ingreso', [LoginController::class, 'ingreso'])->name('ingreso');
Route::get('/registro', [LoginController::class, 'registro'])->name('registro');
Route::get('guardar_registro', [LoginController::class, 'guardar_registro'])->name('guardar_registro');
Route::get('/ejecutar', [MotorPruebas::class, 'ejecutar'])->name('ejecutar');


Route::middleware(['verificarautenticacion'])->group(function () {

    Route::get('/principal', [LoginController::class, 'principal'])->name('principal');

    // Actividades
    Route::prefix('actividades')->group(function () {
        Route::get('/vertodos', [ActividadesControlador::class, 'vertodos'])->name('vertodos');
        Route::get('/nuevaactividad', [ActividadesControlador::class, 'nuevaactividad'])->name('nuevaactividad');
        Route::get('/guardaractividad', [ActividadesControlador::class, 'guardaractividad'])->name('guardaractividad');

    });


    //Contactos
    Route::prefix('contactos')->group(function () {
        Route::get('/vertodoscontactos', [ContactosControlador::class, 'vertodoscontactos'])->name('vertodoscontactos');
        Route::get('/nuevocontacto', [ContactosControlador::class, 'nuevocontacto'])->name('nuevocontacto');
        Route::get('/guardarcontacto', [ContactosControlador::class, 'guardarcontacto'])->name('guardarcontacto');

    });



    //Productos

    Route::prefix('productos')->group(function () {

        Route::get('/vertodosproductos', [ProductosControlador::class, 'vertodosproductos'])->name('vertodosproductos');
        Route::get('/nuevoproducto', [ProductosControlador::class, 'nuevoproducto'])->name('nuevoproducto');
        Route::get('/guardarproducto', [ProductosControlador::class, 'guardarproducto'])->name('guardarproducto');

    });



    //Configuracion
    Route::prefix('configuracion')->group(function () {

        Route::get('/vertodosconfiguracion', [ConfiguracionController::class, 'vertodosconfiguracion'])->name('vertodosconfiguracion');
        Route::get('/guardaretiquetaactividad', [ConfiguracionController::class, 'guardaretiquetaactividad'])->name('guardaretiquetaactividad');
        Route::get('/guardartuberia', [ConfiguracionController::class, 'guardartuberia'])->name('guardartuberia');
        Route::get('/obteneretapas', [ConfiguracionController::class, 'obteneretapas'])->name('obteneretapas');
        Route::get('/guardaretapa', [ConfiguracionController::class, 'guardaretapa'])->name('guardaretapa');
        Route::get('/eliminaretiqueta', [ConfiguracionController::class, 'eliminaretiqueta'])->name('eliminaretiqueta');
        Route::get('/guardarllamada', [ConfiguracionController::class, 'guardarllamada'])->name('guardarllamada');
        Route::get('/eliminarllamada', [ConfiguracionController::class, 'eliminarllamada'])->name('eliminarllamada');
        Route::get('/eliminarusuario', [ConfiguracionController::class, 'eliminarusuario'])->name('eliminarusuario');
        Route::get('/guardarusuario', [ConfiguracionController::class, 'guardarusuario'])->name('guardarusuario');



    });


    //Ofertas
    Route::prefix('ofertas')->group(function () {
        Route::get('/verofertas', [OfertasControlador::class, 'verofertas'])->name('verofertas');
        Route::get('/obteneroferta', [OfertasControlador::class, 'obteneroferta'])->name('obteneroferta');
         Route::get('/obtenerencabezado', [OfertasControlador::class, 'obtenerencabezado'])->name('obtenerencabezado');
    });

    //Documentos
        Route::prefix('documentos')->group(function () {
        Route::get('/verdocumentos', [documentosControlador::class, 'verdocumentos'])->name('verdocumentos');
        Route::get('/guardardocumento', [documentosControlador::class, 'guardardocumento'])->name('guardardocumento');

       // Route::get('/verdocumentos', [OfertasControlador::class, 'verdocumentos'])->name('verdocumentos');
        });
        Route::prefix('empresas')->group(function () {
            Route::get('/verempresas',[EmpresasController::class,'verempresas'])->name('verempresas');
            Route::get('/crearempresa',[EmpresasController::class,'crearempresa'])->name('crearempresa');
            Route::any('/guardarempresa',[EmpresasController::class,'guardarempresa'])->name('guardarempresa');
        });

    Route::any('/cerrarsession', [LoginController::class, 'cerrarsession'])->name('cerrarsession');


});










