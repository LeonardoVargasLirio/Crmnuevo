@extends('Administrador.diseno.plantilla')
@section('content')

    <div class="d-flex flex-column gap-7 gap-lg-10">
        <div class="card card-flush py-4">
            <div class="card-header">
                <div class="card-title">
                    <h2>Crear Empresa</h2>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-md-3 fv-row">
                        <label class="required form-label">Id de usuario</label>
                        <input type="text" name="id_usuario" id="id_usuario" class="form-control mb-2"
                               placeholder="id del usuario" value=""/>
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="required form-label">fechaa de signacion</label>
                        <input type="date" name="fechaasignacion" id="fechaasignacion" class="form-control mb-2"
                               placeholder="" value=""/>
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="required form-label">Id fuente</label>
                        <input type="text" name="id_fuente" id="id_fuente" class="form-control mb-2"
                               placeholder="id fuente" value=""/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 fv-row">
                        <label class="required form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control mb-2"
                               placeholder="Nombre" value=""/>
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="required form-label">Correo electronico</label>
                        <input type="text" name="correo" id="correo" class="form-control mb-2"
                               placeholder="correo@gmail.com" value=""/>
                    </div>
                    <div class="col-md-3  fv-row">
                        <label class="required form-label">Direccion</label>
                        <input type="text" name="direccion" id="direccion" class="form-control mb-2"
                            placeholder="Direccion" value=""/>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12" style="text-align: center">
            <button onclick="guardar()" class="btn btn-primary" type="button">
                <i class="icon fa-regular fa-floppy-disk"></i>&nbsp;Guardar Empresa
            </button>
        </div>
    </div>

    <script>
        function guardar() {

            var id_usuario = $('#id_usuario').val();
            var fechaasignacion = $('#fechaasignacion').val();
            var id_fuente = $('#id_fuente').val();
            var nombre = $('#nombre').val();
            var correo = $('#correo').val();
            var direccion = $('#direccion').val();

            var datos = {
                "id_usuario": id_usuario,
                "fechaasignacion": fechaasignacion,
                "id_fuente": id_fuente,
                "nombre": nombre,
                "correo": correo,
                "direccion": direccion,
            }

            $.ajax({
                type: 'post',
                url: '{{route('guardarempresa')}}',
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

                        location.href = '{{ route('verempresas') }}';
                    }

                }
            })
        }


    </script>

@endsection
