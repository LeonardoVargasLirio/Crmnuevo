@extends('Administrador.diseno.plantilla')
@section('content')

    <div class="d-flex flex-column gap-7 gap-lg-10">
        <div class="card card-flush py-4">
            <div class="card-header">
                <div class="card-title">
                    <h2>Nueva Actividad</h2>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-md-3 fv-row">
                        <label class="required form-label">Titulo</label>
                        <input type="text" name="titulo" id="titulo" class="form-control mb-2"
                               placeholder="Ingrese el titulo" value=""/>
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="required form-label">Tipo Actividad</label>
                        <input type="text" name="tipo_actividad" id="tipo_actividad" class="form-control mb-2"
                               placeholder="Ingrese la Actividad" value=""/>
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="required form-label">Fecha de Vencimiento</label>
                        <div class="d-flex gap-3">
                            <input name="fecha_vencimiento" id="fecha_vencimiento" class="form-control mb-2" type="date"
                                   placeholder="Ingrese Fecha de Vencimiento" value="{{ old('fecha_vencimiento') }}"/>
                        </div>
                    </div>
                    <div class="col-md-3  fv-row">
                        <label class="required form-label">Administrador</label>
                        <select id="id_administrador" name="id_administrador" class="form-select"
                                aria-label="Seleccione una opcion">
                            <option selected>Seleccione un Administrador</option>
                            @foreach($administradores as $administrador)
                                <option value="{{$administrador->id}}">{{$administrador->nombres}}</option>

                            @endforeach
                        </select>

                    </div>


                </div>



            </div>
        </div>


        <div class="col-md-12" style="text-align: center">
            <button onclick="guardar()" class="btn btn-primary" type="button">
                <i class="icon fa-regular fa-floppy-disk"></i>&nbsp;Guardar Actividad
            </button>

        </div>

    </div>
    <script>


        function guardar() {

            var titulo = $('#titulo').val();
            var tipo_actividad = $('#tipo_actividad').val();
            var id_administrador = $('#id_administrador').val();
            var fecha_vencimiento = $('#fecha_vencimiento').val();
            var cliente = $('#cliente').val();

            var datos = {
                "titulo": titulo,
                "tipo_actividad": tipo_actividad,
                "fecha_vencimiento": fecha_vencimiento,
                "cliente": cliente,
                "id_administrador": id_administrador,
            }

            $.ajax({
                type: 'get',
                url: '{{route('guardaractividad')}}',
                data: {
                    datos: datos,
                },
                success: function (resp) {
                    console.log(resp, 'aqui');

                    if (resp.respuesta == true) {

                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "Guardado y Procesado",
                            showConfirmButton: false,
                            timer: 1500
                        });

                        location.href = '{{ route('vertodos') }}';


                    }


                }
            })
        }


    </script>

@endsection
