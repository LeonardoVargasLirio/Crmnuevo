

<table id="kt_widget_table_3"  class="table table-row-dashed align-middle fs-6 gy-4 my-0 pb-3" data-kt-table-widget-3="all">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Catidad</th>
    </tr>
    </thead>
    <tbody>

    @foreach($datos as $dato)
        <tr>
            <th scope="row">1</th>
            <td>{{$dato->nombre}}</td>
            <td>{{$dato->cantidad}}</td>
        </tr>
    @endforeach



    </tbody>
</table>
