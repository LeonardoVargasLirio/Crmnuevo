@extends('Administrador.diseno.plantilla')
@section('content')
    <h1>Contactos</h1>

    @php
    //dd(session('id_usuario'));
    @endphp

    <div id="kt_content_container" class="container-xxl">
        <div class="card">
            <div class="card-header border-0 pt-6">
                <div class="card-title">
                    <div class="d-flex align-items-center position-relative my-1">
                        <input type="text" data-kt-subscription-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Burcar Suscripciones" />
                    </div>
                </div>
                <div class="card-toolbar">
                    <div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">
                        <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-filter fs-2">
                            </i>Aplicar Filtros</button>
                        <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_subscriptions_export_modal">
                            <i class="ki-duotone ki-exit-up fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>Descargar Excel</button>
                        <a href="{{ route('nuevocontacto') }}" class="btn btn-primary">
                            <i class="ki-duotone ki-plus fs-2"></i>Crear Contacto</a>
                    </div>
                </div>
            </div>

            <div class="card-body pt-0">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_subscriptions_table">
                    <thead>
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-125px">Administrador</th>
                        <th class="min-w-125px">Nombre</th>
                        <th class="min-w-125px">Apellido</th>
                        <th class="min-w-125px">Direccion</th>
                        <th class="min-w-125px">telefono</th>
                        <th class="min-w-125px">etiqueta</th>
                        <th class="min-w-125px">fuente</th>
                        <th class="text-end min-w-70px">Acciones</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                    @foreach($contactos as $contacto)
                        <tr>
                            <td>{{$contacto->id_administrador}}</td>
                            <td>{{$contacto->nombre}}</td>
                            <td>{{$contacto->apellido}}</td>
                            <td>{{$contacto->direccion}}</td>
                            <td>{{$contacto->telefono}}</td>
                            <td>{{$contacto->etiqueta}}</td>
                            <td>{{$contacto->fuente}}</td>
                            <td>
                                <a href="#">
                                    <button type="button" class="btn btn-sm btn-link"><i class="fa-solid fa-pen-to-square"></i></button>
                                </a>
                                <a href="#">
                                    <button type="button" class="btn btn-sm btn-link"><i class="fa-solid fa-trash-can"></i></button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



    <script>
        var fechas = {!! json_encode($contactosPorDia->pluck('fecha')) !!};
        var cantidades = {!! json_encode($contactosPorDia->pluck('cantidad')) !!};

        var ctx = document.getElementById('graficaContactosPorDia').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: fechas,
                datasets: [{
                    label: 'Contactos por Día',
                    data: cantidades,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

@endsection
