@extends('Administrador.diseno.plantilla')
@section('content')


    <form  method="get" action="{{route('verofertas')}}">
        @csrf

        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-bg-primary" name="vista" value="lista">Mostrar Lista</button>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-bg-primary" name="vista" value="tablero">Mostrar Tablero</button>
            </div>

        </div>

    </form>
    <br><br>
    <div class="card card-bordered">
    <div class="card-body pt-1">

        @isset($vista)
            @if ($vista === 'lista')
                @include('ofertas.listas')
            @elseif ($vista === 'tablero')
                @include('ofertas.tablero')
            @endif
        @endisset



    </div>

    </div>

    <script>


        function obtenerofertas(){

            var id_tuberia = $('#id_tuberia').val();


            $.ajax({
                type: 'get',
                url: '{{route('obteneroferta')}}',
                data: {
                    id_tuberia: id_tuberia,
                },
                success: function (resp) {

                    if (resp.respuesta == true) {

                        $('#tablaetapas').empty();
                        $(resp.etapas).each(function (i, v) {

                            $('#tablaetapas').append('' +
                                '<tr>' +
                                '<td>' + v.id + '</td>' +
                                '<td>' + v.nombre + '</td>' +
                                '<td>' + v.cantidad + '</td>' +
                                '</tr>' +
                                '');
                        });

                    }
                }
            })

        }


        function obtenerencabezado(id_encabezado){


            $.ajax({
                type: 'get',
                url: '{{route('obtenerencabezado')}}',
                data: {
                    id_encabezado: id_encabezado
                },
                success: function (resp) {

                    console.log(resp)
                    if (resp.respuesta == true) {

                        $('#encabezado').empty();

                        var id_encabezado = resp.encabezadoglobal.id_encabezado;


                        if(id_encabezado == 1){

                            $('#encabezado').append('<th>Nombre de la Oferta</th>');
                            $('#encabezado').append('<th>Escenario</th>');
                            $('#encabezado').append('<th>Cantidad</th>');
                            $('#encabezado').append('<th>Fecha de Cierre prevista</th>');
                            $('#encabezado').append('<th>Estado</th>');

                            $('#tablaetapas').empty();
                            $.each(resp.encabezadoglobal.ofertas, function(i, v) {


                                $('#tablaetapas').append('' +
                                    '<tr>' +
                                    '<td>' + v.id + '</td>' +
                                    '<td>' + v.nombre + '</td>' +
                                    '<td>' + v.cantidad + '</td>' +
                                    '</tr>' +
                                    '');
                            });



                        }else if(id_encabezado == 2){


                            $.each(resp.encabezadoglobal.etapas, function(i, v) {
                                $('#encabezado').append('<th>' + v.nombre + '</th>');
                            });

                            $('#tablaetapas').empty();

                            $(resp.encabezadoglobal.ofertas).each(function (i, v) {

                                var cardHtml = `
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">${v.nombre}</h5>
                                            <p class="card-text">ID: ${v.id}</p>
                                            <p class="card-text">Cantidad: ${v.cantidad}</p>
                                        </div>
                                    </div>
                                </div>`;
                                $('#tablaetapas').append(cardHtml);
                            });




                        }

                    }
                }
            })



        }

    </script>


@endsection
