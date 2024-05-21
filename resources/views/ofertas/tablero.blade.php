<form  method="get" action="{{route('verofertas')}}">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                {{ html_select_tuberias(request('id_tuberia')) }}
            </div>
            <input type="hidden" name="vista" id="vista" value="tablero">
            <div class="col-md-3">
                <button type="submit" class="btn btn-bg-primary" id="enviar" name="enviar">Aplicar Filtro</button>
            </div>
        </div>
    </div>
</form>

<div id="table-container"></div> <!-- Aquí se generará la tabla -->

<!-- Solo cargamos jQuery una vez -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>

<script>
    jQuery(document).ready(function($) {
        // Datos de ejemplo (reemplaza esto con tus datos dinámicos)
        var datos = {!! json_encode($datos) !!};

        // Generar la tabla
        var tablaHTML = '<table id="kt_widget_table_3"  class="table table-row-dashed align-middle fs-6 gy-4 my-0 pb-3" data-kt-table-widget-3="all">';
        tablaHTML += '<thead><tr><th scope="col">#</th><th scope="col">Nombre</th><th scope="col">Probabilidad</th><th scope="col">Orden</th></tr></thead>';
        tablaHTML += '<tbody>';
        $.each(datos, function(index, dato) {
            tablaHTML += '<tr>';
            tablaHTML += '<th scope="row">' + (index + 1) + '</th>';
            tablaHTML += '<td>' + dato.nombre + '</td>';
            tablaHTML += '<td>' + dato.probabilidad + '</td>';
            tablaHTML += '<td>' + dato.orden + '</td>';
            tablaHTML += '</tr>';
        });
        tablaHTML += '</tbody></table>';

        // Agregar la tabla al contenedor
        $('#table-container').html(tablaHTML);

        // Habilitar la funcionalidad de arrastrar y soltar con jQuery UI
        $("#kt_widget_table_3 tbody").sortable({
            connectWith: "#kt_widget_table_3 tbody", // Conecta todas las tablas
            placeholder: "ui-state-highlight", // Estilo de resaltado al arrastrar
            helper: "clone", // Crea un clon del elemento al arrastrar
            forcePlaceholderSize: true, // Mantiene el tamaño del marcador al arrastrar
            update: function(event, ui) {
                // Acción que ocurre cuando se suelta el elemento arrastrado
                var id = ui.item.attr('id'); // Obtén el ID del elemento arrastrado
                var newState = ui.item.parent().closest('table').attr('data-state'); // Obtén el nuevo estado

                // Aquí puedes enviar la información del movimiento al servidor si es necesario
                // Por ejemplo, podrías hacer una solicitud AJAX para actualizar la base de datos

                console.log("El elemento con ID " + id + " fue movido al estado " + newState);
            }
        }).disableSelection(); // Deshabilita la selección de texto dentro de la tabla
    });
</script>
