@extends('Administrador.diseno.plantilla')
@section('content')

    <div class="d-flex flex-column gap-7 gap-lg-10">
        <div class="card card-flush py-4">
            <div class="card-header">
                <div class="card-title">
                    <h2>Nuevo Producto</h2>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-md-3 fv-row">
                        <label class="required form-label">codigo</label>
                        <input type="text" name="codigo" id="codigo" class="form-control mb-2"
                               placeholder="codigo" value=""/>
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="required form-label">nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control mb-2"
                               placeholder="Nombre" value=""/>
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="required form-label">descripcion</label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control mb-2"
                               placeholder="Descripcion" value=""/>
                    </div>
                    <div class="col-md-3 fv-row">
                        <label class="required form-label">precio_unitario</label>
                        <input type="text" name="precio_unitario" id="precio_unitario" class="form-control mb-2"
                               placeholder="Precio unitario" value=""/>
                    </div>

                    <div class="row">

                        <div class="col-md-3 fv-row">
                            <label class="required form-label">costo_unitario</label>
                            <input type="text" name="costo_unitario" id="costo_unitario" class="form-control mb-2"
                                   placeholder="Precio unitario" value=""/>
                        </div>
                        <div class="col-md-3  fv-row">
                            <label class="required form-label">tipo_iva</label>
                            <select id="Tipo Iva" name="Tipo Iva" class="form-select"
                                    aria-label="Seleccione una opcion">
                                <option selected>Seleccione el tipo de Iva</option>
                            </select>

                        </div>
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

            var codigo = $('#codigo').val();
            var nombre = $('#nombre').val();
            var descripcion = $('#descripcion').val();
            var precio_unitario = $('#precio_unitario').val();
            var costo_unitario = $('#costo_unitario').val();


            var datos = {
                "codigo": codigo,
                "nombre": nombre,
                "descripcion": descripcion,
                "precio_unitario": precio_unitario,
                "costo_unitario": costo_unitario,
            }
            console.log(datos);
            $.ajax({
                type: 'get',
                url: '{{route('guardarproducto')}}',
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

                        location.href = '{{ route('vertodosproductos') }}';


                    }


                }
            })
        }


    </script>

@endsection
