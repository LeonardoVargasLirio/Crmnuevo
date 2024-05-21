@extends('Administrador.diseno.plantilla')
@section('content')
    <h1>Actividades</h1>
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
                    <a href="{{ route('nuevaactividad') }}" class="btn btn-primary">
                        <i class="ki-duotone ki-plus fs-2"></i>Agregar Suscripcion</a>
                </div>
            </div>
        </div>

        <div class="card-body pt-0">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_subscriptions_table">
                <thead>
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    <th class="min-w-125px">Titulo</th>
                    <th class="min-w-125px">Tipo Actividad</th>
                    <th class="min-w-125px">Fecha Vencimiento</th>
                    <th class="min-w-125px">Administrador</th>
                    <th class="text-end min-w-70px">Acciones</th>
                </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                @foreach($actividades as $actividad)
                    <tr>
                        <td>{{$actividad->titulo}}</td>
                        <td>{{$actividad->tipo_actividad}}</td>
                        <td>{{$actividad->fecha_vencimiento}}</td>
                        <td>{{$actividad->id_administrador}}</td>
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
@endsection
