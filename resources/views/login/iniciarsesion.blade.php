<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->
<head><base href="../../../"/>
    <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('/assets/media/logos/favicon.ico')}}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="auth-bg bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
<!--end::Theme mode setup on page load-->
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page bg image-->
    <style>body { background-image: url('{{ asset('/assets/media/auth/bg4.jpg')}}'); } [data-bs-theme="dark"] body { background-image: url('{{ asset('/assets/media/auth/bg4-dark.jpg')}}'); }</style>
    <!--end::Page bg image-->
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-column-fluid flex-lg-row">
        <!--begin::Aside-->
        <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">

        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
            <!--begin::Card-->
            <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
                <!--begin::Wrapper-->
                <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                    <!--begin::Form-->
                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="GET" action="{{ route('ingreso') }}">
                        @csrf
                        <div class="text-center mb-11">
                            <h1 class="text-dark fw-bolder mb-3">Iniciar Sesion </h1>
                        </div>

                            <div class="fv-row mb-8">

                                <input type="email" placeholder="Correo Electronico" name="correo" id="correo" autocomplete="off" class="form-control bg-transparent" />

                            </div>

                            <div class="fv-row mb-3">

                                <input type="password" placeholder="Contrasena" name="contrasena" id="contrasena" autocomplete="off" class="form-control bg-transparent" />

                            </div>


                            <a href="#" class="link-primary">Has olvidado tu contraseña ?</a>

                            <div class="d-grid mb-10">
                                <button type="submit" id="enviar" class="btn btn-primary">
                                    <span class="indicator-label">Iniciar Sesion</span>
                                </button>
                            </div>
                            <a href="{{ route('registro') }}" class="link-primary">Registrase</a>

                </form>

                </div>

            </div>

        </div>

    </div>

</div>





</body>

</html>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const correoInput = document.getElementById('correo');
        const iconoCorreo = document.getElementById('iconoCorreo');

        correoInput.addEventListener('input', function() {
            const correo = correoInput.value;
            if ((correo.includes('@') && (correo.includes('.com')) || correo.includes('.ec') || correo.includes('.net'))) {
                correoInput.classList.remove('is-invalid');
                correoInput.classList.add('is-valid');
                iconoCorreo.innerHTML = '<i class="fas fa-check-circle text-success"></i>';
            } else {
                correoInput.classList.remove('is-valid');
                correoInput.classList.add('is-invalid');
                iconoCorreo.innerHTML = '<i class="fas fa-times-circle text-danger"></i>';
            }
        });
    });

</script>
