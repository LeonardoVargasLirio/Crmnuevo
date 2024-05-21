@if ($item['submenu'] == [])
    @php $bloqueo=0; @endphp

    @if($item['demo']==0 and session("demo")==1)
        @php $bloqueo=1; @endphp
    @endif

    @if($item['vendedor']==0 and session("tipo_usuario")=="vendedor")
        @php $bloqueo=1; @endphp
    @endif

    @if($item['permiso1']!="" and session($item['permiso1'])==0)
        @php $bloqueo=1; @endphp
    @endif

    @if($item['permiso2']!="" and session($item['permiso2'])==0)
        @php $bloqueo=1; @endphp
    @endif

    @if($item['permiso3']!="" and session($item['permiso3'])==0)
        @php $bloqueo=1; @endphp
    @endif





    @if($item['webmaster']==1 and session("webmaster")==0)
        @php $bloqueo=1; @endphp
    @endif


    @if($bloqueo==0)

        <div  class="menu-item">
            <a class="menu-link" @if($item['color']!="")style="background: {{$item['color']}};" @endif
            @if($item['ruta']!="")
                @if (\Illuminate\Support\Facades\Route::has($item['ruta']))
                    @if($item['parametro1']!="")
                        href="{{route($item['ruta'],[$item['parametro1'],$submenu['parametro2']])}}"
               @else
                   href="{{route($item['ruta'])}}"
               @endif
               @else
                   href="#"
               @endif
               @else
                   href="#"
                @endif
            >

                <span class="menu-bullet"><em class="{{ $item['icono2'] }}"></em></span>
                <span class="nk-menu-text">{{ $item['nombre'] }}</span>



            </a>
        </div >
    @endif
@else

    @php $bloqueo2=0; @endphp

    @if($item['demo']==0 and session("demo")==1)
        @php $bloqueo2=1; @endphp
    @endif

    @if($item['vendedor']==0 and session("tipo_usuario")=="vendedor")
        @php $bloqueo2=1; @endphp
    @endif

    @if($item['permiso1']!="" and session($item['permiso1'])==0)
        @php $bloqueo2=1; @endphp
    @endif

    @if($item['permiso2']!="" and session($item['permiso2'])==0)
        @php $bloqueo2=1; @endphp
    @endif

    @if($item['permiso3']!="" and session($item['permiso3'])==0)
        @php $bloqueo2=1; @endphp
    @endif



    @if($item['webmaster']==1 and session("webmaster")==0)
        @php $bloqueo2=1; @endphp
    @endif

    @if($bloqueo2==0)
        <li class="nk-menu-item" @if($item['color']!="")style="background: {{$item['color']}};"@endif >
            <a href="#" class="nk-menu-link nk-menu-toggle">

                <span class="nk-menu-icon"><em class="{{ $item['icono2'] }}"></em></span>
                <span class="nk-menu-text">{{ $item['nombre'] }}</span>

            </a>

            @php //dd($item['submenu']); @endphp
            <ul class="nk-menu-sub" style="display: none;">
                @foreach ($item['submenu'] as $submenu)

                @if ($submenu['submenu'] == [])

                        @php $bloqueo3=0; @endphp

                        @if($submenu['demo']==0 and session("demo")==1)
                            @php $bloqueo3=1; @endphp
                        @endif

                        @if($submenu['vendedor']==0 and session("tipo_usuario")=="vendedor")
                            @php $bloqueo3=1; @endphp
                        @endif

                        @if($submenu['permiso1']!="" and session($submenu['permiso1'])==0)
                            @php $bloqueo3=1; @endphp
                        @endif

                        @if($submenu['permiso2']!="" and session($submenu['permiso2'])==0)
                            @php $bloqueo3=1; @endphp
                        @endif

                        @if($submenu['permiso3']!="" and session($submenu['permiso3'])==0)
                            @php $bloqueo3=1; @endphp
                        @endif



                        @if($submenu['webmaster']==1 and session("webmaster")==0)
                            @php $bloqueo3=1; @endphp
                        @endif


                    @if($bloqueo3==0)
                            <li class="nk-menu-item" >
                                <a class="nk-menu-link"
                                   @if($submenu['color']!="")style="background: {{$submenu['color']}};" @endif
                                   @if($submenu['ruta']!="")

                                       @if (\Illuminate\Support\Facades\Route::has($submenu['ruta']))
                                           @if($submenu['parametro1']!="")
                                               href="{{route($submenu['ruta'],[$submenu['parametro1'],$submenu['parametro2']])}}"
                                   @else
                                       href="{{route($submenu['ruta'])}}"
                                   @endif
                                   @else
                                       href="#"
                                   @endif
                                   @else
                                       href="#"
                                    @endif
                                >


                                    <span class="nk-menu-icon"> <em class="{{ $submenu['icono2'] }}"></em></span>
                                    <span class="nk-menu-text"> {{ $submenu['nombre'] }}</span>

                                </a>
                            </li>
                        @endif
                    @else

                        @include('diseno.menu-item', [ 'item' => $submenu ])
                    @endif
                @endforeach
            </ul>
        </li>
    @endif
@endif
