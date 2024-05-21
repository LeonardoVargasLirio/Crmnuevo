@extends('Administrador.diseno.plantilla')
@section('content')

    <div class="row g-5 g-xl-10">
        <div class="col-xl-4 mb-xl-10">
            <div class="card h-xl-100">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Configuraciones</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">General</span>
                    </h3>
                </div>
                <div class="card-body pt-6">

                    <div class="d-flex flex-stack">
                        <div class="symbol symbol-40px me-4">
                            <div class="symbol-label fs-2 fw-semibold bg-danger text-inverse-danger">T</div>
                        </div>
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold menu_link"
                                   data-target="#tuberias">Tuberias</a>
                                <span class="text-muted fw-semibold d-block fs-7">Opciones</span>
                            </div>
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <i class="ki-duotone ki-arrow-right fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </div>
                    </div>

                    <div class="separator separator-dashed my-4"></div>

                    <div class="d-flex flex-stack">
                        <div class="symbol symbol-40px me-4">
                            <div class="symbol-label fs-2 fw-semibold bg-danger text-inverse-danger">A</div>
                        </div>
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold menu_link"
                                   data-target="#actividades">Actividades</a>
                                <span class="text-muted fw-semibold d-block fs-7">Opciones</span>
                            </div>
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <i class="ki-duotone ki-arrow-right fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-4"></div>
                    <div class="d-flex flex-stack">
                        <div class="symbol symbol-40px me-4">
                            <div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary">L</div>
                        </div>
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold menu_link"
                                   data-target="#llamadas">Llamadas</a>
                                <span class="text-muted fw-semibold d-block fs-7">Opciones</span>
                            </div>
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <i class="ki-duotone ki-arrow-right fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-4"></div>
                    <div class="d-flex flex-stack">
                        <div class="symbol symbol-40px me-4">
                            <div class="symbol-label fs-2 fw-semibold bg-warning text-inverse-warning">U</div>
                        </div>
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold menu_link"
                                   data-target="#usuarios">Usuarios</a>
                                <span class="text-muted fw-semibold d-block fs-7">Opciones</span>
                            </div>
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <i class="ki-duotone ki-arrow-right fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </div>
                    </div>

                    <div class="separator separator-dashed my-4"></div>

                    <div class="d-flex flex-stack">
                        <div class="symbol symbol-40px me-4">
                            <div class="symbol-label fs-2 fw-semibold bg-dark text-inverse-dark">C</div>
                        </div>
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold menu_link"
                                   data-target="#correos">Correos</a>
                                <span class="text-muted fw-semibold d-block fs-7">Opciones</span>
                            </div>
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                <i class="ki-duotone ki-arrow-right fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 mb-5 mb-xl-10">
            <div class="card card-flush h-xl-100">
                <div class="card-header pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Ver Opciones</span>
                        <span class="text-gray-400 pt-2 fw-semibold fs-6">Detalles</span>
                    </h3>

                </div>

                <div class="card-body">
                    <div class="tab-content">

                        <div id="tuberias" class="tab-pane active">

                            <h1>Tuberias</h1>

                            <div class="card card-flush h-xl-100">
                                <div class="card-header py-7">
                                    <div
                                        class="card-title pt-6 mb-0 gap-6 gap-lg-10 gap-xl-15 nav nav-tabs border-bottom-0"
                                        data-kt-table-widget-3="tabs_nav">



                                    </div>
                                    <div class="card-toolbar">
                                        <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal"
                                           data-bs-target="#modaltuberias">Nueva Tuberia</a>
                                    </div>
                                </div>
                                <div class="card-body pt-1">
                                    <table id="kt_widget_table_3"
                                           class="table table-row-dashed align-middle fs-6 gy-4 my-0 pb-3"
                                           data-kt-table-widget-3="all">
                                        <thead>
                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Probabilidad</th>
                                            <th>Accion</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($tuberias as $tuberia)
                                            <tr>
                                                <td>{{$tuberia->id}}</td>
                                                <td>{{$tuberia->nombre}}</td>
                                                <td>{{$tuberia->defecto}}</td>
                                                <td>
                                                    <a href="#"
                                                       class="text-gray-800 text-hover-primary fs-6 fw-bold menu_link"
                                                       data-target="#etapas" onclick="obteneretapas({{$tuberia->id}},'{{ $tuberia->nombre }}')">Etapas</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>


                        <div id="etapas" class="tab-pane">

                            <h1>Etapas</h1>

                            <div class="card card-flush h-xl-100">
                                <div class="card-header py-7">
                                    <div
                                        class="card-title pt-6 mb-0 gap-6 gap-lg-10 gap-xl-15 nav nav-tabs border-bottom-0"
                                        data-kt-table-widget-3="tabs_nav">

                                        <div style="display: flex; align-items: center;">
                                            <input disabled class="form-control" style="background: transparent; border:none" id="nombret" name="nombret">
                                            <input type="hidden" class="form-control" id="id_tuberiallenar" name="id_tuberiallenar">
                                        </div>

                                    </div>
                                    <div class="card-toolbar">
                                        <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal"
                                           data-bs-target="#modaletapas">Nueva Etapa</a>
                                    </div>
                                </div>
                                <div class="card-body pt-1">
                                    <table id="kt_widget_table_3"
                                           class="table table-row-dashed align-middle fs-6 gy-4 my-0 pb-3"
                                           data-kt-table-widget-3="all">
                                        <thead>
                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Probabilidad</th>
                                            <th>Accion</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tablaetapas">

                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>


                        <div id="actividades" class="tab-pane">
                            <h1>Actividades</h1>
                            <div class="card card-flush h-xl-100">
                                <div class="card-header py-7">
                                    <div
                                        class="card-title pt-3 mb-0 gap-4 gap-lg-10 gap-xl-15 nav nav-tabs border-bottom-0"
                                        data-kt-table-widget-3="tabs_nav">

                                    </div>
                                    <div class="card-toolbar">
                                        <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal"
                                           data-bs-target="#modaltipoactividad">Nueva Etiqueta</a>
                                    </div>
                                </div>
                                <div class="card-body pt-1">
                                    <table id="kt_widget_table_3"
                                           class="table table-row-dashed align-middle fs-6 gy-4 my-0 pb-3"
                                           data-kt-table-widget-3="all">
                                        <thead>
                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                            <th>ID</th>
                                            <th>Etiqueta</th>
                                            <th>Icono</th>
                                            <th>Eliminar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($etiquetas as $etiqueta)
                                            <tr>
                                                <!-- <td class="min-w-175px">-->
                                                <td>
                                                    <div class="position-relative ps-6 pe-3 py-2">
                                                        <div
                                                            class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-info"></div>
                                                        <a href="#"
                                                           class="mb-1 text-dark text-hover-primary fw-bold">{{$etiqueta->id}}</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="mb-1 text-dark text-hover-primary fw-bold">{{$etiqueta->nombre}}</a>

                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="mb-1 text-dark text-hover-primary fw-bold">{{$etiqueta->icono}}</a>
                                                </td>
                                                <td>
                                                    <a class="eliminaretiqueta" id_etiqueta="{{$etiqueta->id}}"
                                                       nombre_etiqueta="{{$etiqueta->nombre}}"
                                                       data-bs-toggle="tooltip"
                                                       data-bs-placement="top" data-bs-original-title="Eliminar">
                                                        <button type="button" class="btn btn-sm btn-link"><i
                                                                class="fa-solid fa-trash-can"></i></button>
                                                    </a>


                                                </td>

                                            </tr>

                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                        <div id="llamadas" class="tab-pane">
                            <h1>Llamadas</h1>
                            <div class="card card-flush h-xl-100">
                                <div class="card-header py-7">
                                    <div
                                        class="card-title pt-3 mb-0 gap-4 gap-lg-10 gap-xl-15 nav nav-tabs border-bottom-0"
                                        data-kt-table-widget-3="tabs_nav">

                                    </div>
                                    <div class="card-toolbar">
                                        <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal"
                                           data-bs-target="#modalllamadas">Crear Resultado</a>
                                    </div>
                                </div>
                                <div class="card-body pt-1">
                                    <table id="kt_widget_table_3"
                                           class="table table-row-dashed align-middle fs-6 gy-4 my-0 pb-3"
                                           data-kt-table-widget-3="all">
                                        <thead>
                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                            <th>ID</th>
                                            <th>Etiqueta</th>
                                            <th>Eliminar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($llamadas as $llamada)
                                            <tr>
                                                <!-- <td class="min-w-175px">-->
                                                <td>
                                                    <div class="position-relative ps-6 pe-3 py-2">
                                                        <div
                                                            class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-info"></div>
                                                        <a href="#"
                                                           class="mb-1 text-dark text-hover-primary fw-bold">{{$llamada->id}}</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="mb-1 text-dark text-hover-primary fw-bold">{{$llamada->nombre}}</a>

                                                </td>
                                                <td>
                                                    <a class="eliminarllamada" id_llamada="{{$llamada->id}}"
                                                       nombre_llamada="{{$llamada->nombre}}"
                                                       data-bs-toggle="tooltip"
                                                       data-bs-placement="top" data-bs-original-title="Eliminar">
                                                        <button type="button" class="btn btn-sm btn-link"><i
                                                                class="fa-solid fa-trash-can"></i></button>
                                                    </a>


                                                </td>

                                            </tr>

                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                        <div id="usuarios" class="tab-pane">
                            <h1>Usuarios</h1>
                            <div class="card card-flush h-xl-100">
                                <div class="card-header py-7">
                                    <div
                                        class="card-title pt-3 mb-0 gap-4 gap-lg-10 gap-xl-15 nav nav-tabs border-bottom-0"
                                        data-kt-table-widget-3="tabs_nav">

                                    </div>
                                    <div class="card-toolbar">
                                        <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal"
                                           data-bs-target="#modalusuarios">Crear Usuario</a>
                                    </div>
                                </div>
                                <div class="card-body pt-1">
                                    <table id="kt_widget_table_3"
                                           class="table table-row-dashed align-middle fs-6 gy-4 my-0 pb-3"
                                           data-kt-table-widget-3="all">
                                        <thead>
                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Tipo</th>
                                            <th>Celular</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($usuarios as $usuario)
                                            <tr>
                                                <!-- <td class="min-w-175px">-->
                                                <td>
                                                    <div class="position-relative ps-6 pe-3 py-2">
                                                        <div
                                                            class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-info"></div>
                                                        <a href="#"
                                                           class="mb-1 text-dark text-hover-primary fw-bold">{{$usuario->id}}</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="mb-1 text-dark text-hover-primary fw-bold">{{$usuario->nombre}}</a>

                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="mb-1 text-dark text-hover-primary fw-bold">{{$usuario->correo}}</a>

                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="mb-1 text-dark text-hover-primary fw-bold">{{$usuario->tipo}}</a>

                                                </td>
                                                <td>
                                                    <a href="#"
                                                       class="mb-1 text-dark text-hover-primary fw-bold">{{$usuario->celular}}</a>

                                                </td>
                                                <td>
                                                    <a class="eliminarusuario" id_usuario="{{$usuario->id}}"
                                                       nombre_usuario="{{$usuario->nombre}}"
                                                       data-bs-toggle="tooltip"
                                                       data-bs-placement="top" data-bs-original-title="Eliminar">
                                                        <button type="button" class="btn btn-sm btn-link"><i
                                                                class="fa-solid fa-trash-can"></i></button>
                                                    </a>


                                                </td>

                                            </tr>

                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>



                        </div>

                        <div id="correos" class="tab-pane">
                            <h1>Correos</h1>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="modal fade" tabindex="-1" id="modaltipoactividad">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"> <em
                        class="icon ni ni-cross"></em> </a>
                <div class="modal-header"><h5 class="modal-title">Tipo Actividades</h5></div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6">
                            <label class="required form-label">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control mb-2"
                                   placeholder="Etiqueta" value=""/>
                        </div>
                        <div class="col-md-6">
                            <label class="required form-label">Icono</label>
                            <input type="text" name="icono" id="icono" class="form-control mb-2"
                                   placeholder="54211XXX" value=""/>
                        </div>
                        <div class="col-md-12" style="text-align: center">
                            <button onclick="guardaretiqueta()" class="btn btn-primary" type="button">
                                <i class="icon fa-regular fa-floppy-disk"></i>&nbsp;Guardar Etiqueta
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Modal Actividades</span>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" tabindex="-1" id="modaletapas">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"> <em
                        class="icon ni ni-cross"></em> </a>
                <div class="modal-header"><h5 class="modal-title">Etapas</h5></div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6">
                            <label class="required form-label">Nombre Etapa</label>
                            <input type="text" name="nombreetapa" id="nombreetapa" class="form-control mb-2"
                                   placeholder="Ingrese nombre" value=""/>
                        </div>
                        <div class="col-md-6">
                            <label class="required form-label">Probabilidad</label>
                            <input type="text" name="probabilidad" id="probabilidad" class="form-control mb-2"
                                   placeholder="100" value=""/>
                        </div>
                        <div class="col-md-12" style="text-align: center">
                            <button onclick="guardaretapa()" class="btn btn-primary" type="button">
                                <i class="icon fa-regular fa-floppy-disk"></i>&nbsp;Guardar Etapa
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Modal Etapas</span>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="modaltuberias">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"> <em
                        class="icon ni ni-cross"></em> </a>
                <div class="modal-header"><h5 class="modal-title">Tuberias</h5></div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6">
                            <label class="required form-label">Nombre</label>
                            <input type="text" name="nombretuberia" id="nombretuberia" class="form-control mb-2"
                                   placeholder="Ingrese nombre" value=""/>
                        </div>
                    </div>
                </div>

                <div class="col-md-12" style="text-align: center">
                    <button onclick="guardartuberia()" class="btn btn-primary" type="button">
                        <i class="icon fa-regular fa-floppy-disk"></i>&nbsp;Guardar Tuberia
                    </button>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Modal Tuberia</span>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" tabindex="-1" id="modalllamadas">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"> <em
                        class="icon ni ni-cross"></em> </a>
                <div class="modal-header"><h5 class="modal-title">LLamadas</h5></div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6">
                            <label class="required form-label">Nombre </label>
                            <input type="text" name="nombrellamada" id="nombrellamada" class="form-control mb-2"
                                   placeholder="Ingrese nombre" value=""/>
                        </div>
                        <div class="col-md-6">
                            <label class="required form-label">Color</label>
                            <input type="text" name="colorllamada" id="colorllamada" class="form-control mb-2"
                                   placeholder="100" value=""/>
                        </div>
                        <div class="col-md-12" style="text-align: center">
                            <button onclick="guardarllamada()" class="btn btn-primary" type="button">
                                <i class="icon fa-regular fa-floppy-disk"></i>&nbsp;Guardar Llamada
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Modal Etapas</span>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" tabindex="-1" id="modalusuarios">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"> <em
                        class="icon ni ni-cross"></em> </a>
                <div class="modal-header"><h5 class="modal-title">Usuarios</h5></div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-4">
                            <label class="required form-label">Nombre </label>
                            <input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control mb-2"
                                   placeholder="Ingrese nombre" value=""/>
                        </div>
                        <div class="col-md-4">
                            <label class="required form-label">Correo</label>
                            <input type="text" name="correo_usuario" id="correo_usuario" class="form-control mb-2"
                                   placeholder="100" value=""/>
                        </div>
                        <div class="col-md-4">
                            <label class="required form-label">Tipo</label>
                            <select class="form-select" name="tipo_usuario" id="tipo_usuario" aria-label="Default select example">
                                <option value="1">Administrador</option>
                                <option value="2">Vendedor</option>
                                <option value="3">Invitado (Demo)</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label class="required form-label">Contrasena </label>
                            <input type="text" name="contrasena" id="contrasena" class="form-control mb-2"
                                   placeholder="Ingrese nombre" value=""/>
                        </div>

                        <div class="col-md-4">
                            <label class="required form-label">Celular </label>
                            <input type="text" name="celular_usuario" id="celular_usuario" class="form-control mb-2"
                                   placeholder="Ingrese nombre" value=""/>
                        </div>
                        <div class="col-md-4">
                            <label class="required form-label">Cargo</label>
                            <input type="text" name="cargo_usuario" id="cargo_usuario" class="form-control mb-2"
                                   placeholder="100" value=""/>
                        </div>

                    </div>
                    <br><br>




                    <div class="col-md-12" style="text-align: center">
                        <button onclick="guardarusuario()" class="btn btn-primary" type="button">
                            <i class="icon fa-regular fa-floppy-disk"></i>&nbsp;Guardar Usuario
                        </button>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Modal Usuario</span>
                </div>
            </div>
        </div>
    </div>



    <script>

        function guardarusuario(){
            var nombre_usuario = $('#nombre_usuario').val();
            var correo_usuario = $('#correo_usuario').val();
            var tipo_usuario = $('#tipo_usuario').val();
            var celular_usuario = $('#celular_usuario').val();
            var cargo_usuario = $('#cargo_usuario').val();
            var contrasena = $('#contrasena').val();


            $.ajax({
                type: 'get',
                url: '{{route('guardarusuario')}}',
                data: {
                    nombre_usuario: nombre_usuario,
                    correo_usuario: correo_usuario,
                    tipo_usuario: tipo_usuario,
                    celular_usuario: celular_usuario,
                    cargo_usuario: cargo_usuario,
                    contrasena: contrasena,
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

                        location.href = "{{route('vertodosconfiguracion')}}";

                    }
                }
            })
        }


        function guardarllamada(){

            var nombrellamada = $('#nombrellamada').val();
            var colorllamada = $('#colorllamada').val();


            $.ajax({
                type: 'get',
                url: '{{route('guardarllamada')}}',
                data: {
                    nombrellamada: nombrellamada,
                    colorllamada: colorllamada,
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

                        location.href = "{{route('vertodosconfiguracion')}}";

                    }
                }
            })

        }



        $('.eliminarusuario').click(function (e) {
            e.preventDefault();
            var id_usuario = this.getAttribute("id_usuario");
            var nombre_usuario = this.getAttribute("nombre_usuario");

            Swal.fire({
                title: "Esta seguro que desea eliminar  ' " + nombre_usuario + " ' ?",
                text: "Recuerde que no podrás revertir esto.!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "SI, Eliminar!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'GET',
                        url: '{{ route("eliminarusuario") }}',
                        data: {
                            id_usuario: id_usuario,
                        },
                        success: function (resp) {
                            if (resp.respuesta == true) {
                                Swal.fire({
                                    title: "Eliminado!",
                                    text: "Tu archivo ha sido eliminado",
                                    icon: "success"
                                });
                                location.href = "{{route('vertodosconfiguracion')}}";

                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: resp.error
                                });

                                console.log(resp);
                            }
                        }
                    })
                }
            });



        });



        $('.eliminarllamada').click(function (e) {
            e.preventDefault();
            var id_llamada = this.getAttribute("id_llamada");
            var nombre_llamada = this.getAttribute("nombre_llamada");

            Swal.fire({
                title: "Esta seguro que desea eliminar  ' " + nombre_llamada + " ' ?",
                text: "Recuerde que no podrás revertir esto.!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "SI, Eliminar!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'GET',
                        url: '{{ route("eliminarllamada") }}',
                        data: {
                            id_llamada: id_llamada,
                        },
                        success: function (resp) {
                            if (resp.respuesta == true) {
                                Swal.fire({
                                    title: "Eliminado!",
                                    text: "Tu archivo ha sido eliminado",
                                    icon: "success"
                                });
                                location.href = "{{route('vertodosconfiguracion')}}";

                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: resp.error
                                });

                                console.log(resp);
                            }
                        }
                    })
                }
            });



        });



        $('.eliminaretiqueta').click(function (e) {
            e.preventDefault();
            var id_etiqueta = this.getAttribute("id_etiqueta");
            var nombre_etiqueta = this.getAttribute("nombre_etiqueta");

            Swal.fire({
                title: "Esta seguro que desea eliminar  ' " + nombre_etiqueta + " ' ?",
                text: "Recuerde que no podrás revertir esto.!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "SI, Eliminar!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'GET',
                        url: '{{ route("eliminaretiqueta") }}',
                        data: {
                            id_etiqueta: id_etiqueta,
                        },
                        success: function (resp) {
                            if (resp.respuesta == true) {
                                Swal.fire({
                                    title: "Eliminado!",
                                    text: "Tu archivo ha sido eliminado",
                                    icon: "success"
                                });
                                location.href = "{{route('vertodosconfiguracion')}}";

                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: resp.error
                                });

                                console.log(resp);
                            }
                        }
                    })
                }
            });



        });


        $(document).ready(function () {
            $('.menu_link').click(function (e) {
                e.preventDefault();
                var vista_opcione = $(this).data('target');
                $('.tab-pane').hide();
                $(vista_opcione).show();
            });
        });


        function guardaretiqueta() {

            var icono = $('#icono').val();
            var nombre = $('#nombre').val();

            $.ajax({
                type: 'get',
                url: '{{route('guardaretiquetaactividad')}}',
                data: {
                    icono: icono,
                    nombre: nombre,
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

                        location.href = "{{route('vertodosconfiguracion')}}";

                    }
                }
            })
        }

        function guardartuberia() {

            var nombretuberia = $('#nombretuberia').val();

            $.ajax({
                type: 'get',
                url: '{{route('guardartuberia')}}',
                data: {
                    nombretuberia: nombretuberia,
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

                        location.href = "{{route('vertodosconfiguracion')}}";

                    }
                }
            })
        }

        function guardaretapa() {

            console.log('aqui')
            var id_tuberia = $('#id_tuberiallenar').val();
            var nombreetapa = $('#nombreetapa').val();
            var probabilidad = $('#probabilidad').val();

            $.ajax({
                type: 'get',
                url: '{{route('guardaretapa')}}',
                data: {
                    nombreetapa: nombreetapa,
                    id_tuberia: id_tuberia,
                    probabilidad: probabilidad,
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

                        location.href = "{{route('vertodosconfiguracion')}}";

                    }
                }
            })

        }


        function obteneretapas(id_tuberia,nombretuberia) {

            $.ajax({
                type: 'get',
                url: '{{route('obteneretapas')}}',
                data: {
                    id_tuberia: id_tuberia,
                },
                success: function (resp) {
                    console.log(resp, 'aqui');

                    if (resp.respuesta == true) {
                        $('#tablaetapas').empty();
                        $(resp.etapas).each(function (i, v) {

                            $('#tablaetapas').append('' +
                                '<tr>' +
                                '<td>' + v.id + '</td>' +
                                '<td>' + v.nombre + '</td>' +
                                '<td>' + v.probabilidad + '</td>' +
                                '<td>' +
                                '<button type="button"  class="btn btn-dim btn-outline-danger  eliminaranticipo">' +
                                '<em class="icon ni ni-trash"></em> ' +
                                '</button>' +
                                '</td> ' +
                                '</tr>' +
                                '');
                        });


                        //$("#tablaetapas").LoadingOverlay("hide");


                    }
                }
            })

        }


    </script>

@endsection
