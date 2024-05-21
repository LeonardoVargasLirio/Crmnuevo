
<div class="menu-sub menu-sub-accordion">

    @php
       // $menus = \App\Models\Menu::menus();
    @endphp

    @php //dd($menus); @endphp
@foreach($menus as $key => $item)
        @if ($item['padre'] != 0)
            @break
        @endif
        @include('Administrador.diseno.menu-item',['item' => $item])
    @endforeach


</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('.nk-menu-toggle').click(function(e) {
            e.preventDefault(); // Evita que el enlace se siga cuando se hace clic

            // Encuentra el submenú correspondiente y cambia su estado de visualización
            $(this).siblings('.nk-menu-sub').slideToggle();
        });
    });
</script>

