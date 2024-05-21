@extends('Administrador.diseno.plantilla')
@section('content')

    <div class="d-flex flex-column gap-7 gap-lg-10">
        <div class="card card-flush py-4">
            <div class="card-header">
                <div class="card-title">
                    <h2>Crear Documeto</h2>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-md-3 fv-row">
                        <label class="required form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control mb-2"
                               placeholder="Juan Piguabe" value=""/>
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="required form-label">Apellido</label>
                        <input type="text" name="apellido" id="apellido" class="form-control mb-2"
                               placeholder="Valle Cornejo" value=""/>
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="required form-label">Correo Electronico</label>
                        <input type="text" name="correo" id="correo" class="form-control mb-2"
                               placeholder="correo@gmail.com" value=""/>
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

                <div class="row">
                    <div class="col-md-6 fv-row">
                        <label class="required form-label">Direccion</label>
                        <input type="text" name="direccion" id="direccion" class="form-control mb-2"
                               placeholder="Av Casuarina Coop XXXX...." value=""/>
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="required form-label">Telefono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control mb-2"
                               placeholder="0958451255" value=""/>
                    </div>
                    <div class="col-md-3  fv-row">
                        <label class="required form-label">Etiqueta</label>
                        <select id="etiqueta" name="etiqueta" class="form-select"
                                aria-label="Seleccione una opcion">
                            <option selected>Seleccione una Etiqueta</option>
                        </select>

                    </div>


                </div>

                <div class="row">

                    <div class="col-md-3 fv-row">
                        <label class="required form-label">Fuente</label>
                        <input type="text" name="fuente" id="fuente" class="form-control mb-2"
                               placeholder="Por redes sociales" value=""/>
                    </div>

                </div>


            </div>
        </div>


        <div class="col-md-12" style="text-align: center">
            <button onclick="guardar()" class="btn btn-primary" type="button">
                <i class="icon fa-regular fa-floppy-disk"></i>&nbsp;Guardar Contacto
            </button>

        </div>

    </div>

    <script>


        function guardar() {

            var nombre = $('#nombre').val();
            var apellido = $('#apellido').val();
            var correo = $('#correo').val();
            var id_administrador = $('#id_administrador').val();
            var direccion = $('#direccion').val();
            var telefono = $('#telefono').val();
            var etiqueta = $('#etiqueta').val();
            var fuente = $('#fuente').val();

            var datos = {
                "nombre": nombre,
                "apellido": apellido,
                "correo": correo,
                "id_administrador": id_administrador,
                "direccion": direccion,
                "telefono": telefono,
                "etiqueta": etiqueta,
                "fuente": fuente,
            }

            $.ajax({
                type: 'get',
                url: '{{route('guardardocumento')}}',
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

                        location.href = '{{ route('verdocumentos') }}';


                    }


                }
            })
        }


    </script>

@endsection
