<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.0
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head><base href="../../../"/>
    <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
    <meta charset="utf-8" />
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

    <div class="d-flex flex-column flex-column-fluid flex-lg-row">
        <!--begin::Aside-->
        <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
            <!--begin::Aside-->
            <div class="d-flex flex-center flex-lg-start flex-column">

            </div>
            <!--begin::Aside-->
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
            <!--begin::Card-->
            <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
                <!--begin::Wrapper-->
                <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">

                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif


                    <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" method="GET" action="{{ route('guardar_registro') }}">
                        <!--begin::Heading-->
                        <div class="text-center mb-11">
                            <!--begin::Title-->
                            <h1 class="text-dark fw-bolder mb-3">Registro</h1>

                        </div>

                        <div class="row g-3 mb-9">
                            <!--begin::Col-->
                            <div class="col-md-6">

                            </div>

                            <div class="col-md-6">

                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="fv-row mb-8">
                            <input type="text" placeholder="Correo Electronico" name="correo" id="correo" autocomplete="off" class="form-control bg-transparent" />
                        </div>
                        <div class="fv-row mb-8" data-kt-password-meter="true">
                            <div class="mb-1">
                                <div class="position-relative mb-3">
                                    <input class="form-control bg-transparent" type="password" placeholder="Contrasena" id="contrasena" name="contrasena" autocomplete="off" />
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="ki-duotone ki-eye-slash fs-2"></i>
												<i class="ki-duotone ki-eye fs-2 d-none"></i>
											</span>
                                </div>
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div id="barra1" class="flex-grow-1 bg-secondary rounded h-5px me-2"></div>
                                    <div id="barra2" class="flex-grow-1 bg-secondary rounded h-5px me-2"></div>
                                    <div id="barra3" class="flex-grow-1 bg-secondary rounded h-5px me-2"></div>
                                    <div id="barra4" class="flex-grow-1 bg-secondary rounded h-5px"></div>
                                </div>
                            </div>

                            <div class="text-muted">Utilice 8 o más caracteres con una combinación de letras, números y símbolos.</div>
                        </div>

                        <div class="fv-row mb-8">
                            <input placeholder="Repetir Contrasena" name="confirmacontrasena" id="confirmacontrasena" type="password" autocomplete="off" class="form-control bg-transparent" />
                        </div>

                        <div class="d-grid mb-10">
                            <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Registrarse</span>

                            </button>
                        </div>

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





        const contrasenaInput = document.getElementById('contrasena');
        const confirmaContrasenaInput = document.getElementById('confirmacontrasena');
        const barrasProgreso = document.querySelectorAll('[data-kt-password-meter-control="highlight"] div');

        contrasenaInput.addEventListener('input', function() {
            const contrasena = contrasenaInput.value;
            const longitud = contrasena.length;
            let seguridad = 0;

            // Verificar la longitud de la contraseña
            if (longitud >= 8) {
                seguridad++;
            }

            // Verificar si la contraseña contiene letras
            if (/[a-zA-Z]/.test(contrasena)) {
                seguridad++;
            }

            // Verificar si la contraseña contiene números
            if (/\d/.test(contrasena)) {
                seguridad++;
            }

            // Verificar si la contraseña contiene caracteres especiales
            if (/[^a-zA-Z0-9]/.test(contrasena)) {
                seguridad++;
            }

            // Asignar clases de colores según la seguridad de la contraseña
            barrasProgreso.forEach((barra, index) => {
                if (index === 0 && seguridad >= 1) {
                    barra.classList.remove('bg-secondary');
                    barra.classList.add('bg-warning');
                } else if (index === 1 && seguridad >= 2) {
                    barra.classList.remove('bg-secondary');
                    barra.classList.add('bg-warning');
                } else if (index === 2 && seguridad >= 3) {
                    barra.classList.remove('bg-secondary');
                    barra.classList.add('bg-success');
                } else if (index === 3 && seguridad === 4) {
                    barra.classList.remove('bg-secondary');
                    barra.classList.add('bg-success');
                } else {
                    barra.classList.remove('bg-warning', 'bg-success');
                    barra.classList.add('bg-secondary');
                }
            });
        });

        contrasenaInput.addEventListener('input', function() {
            validarContrasena();
        });

        confirmaContrasenaInput.addEventListener('input', function() {
            validarContrasena();
        });

        function validarContrasena() {
            const contrasena = contrasenaInput.value;
            const confirmaContrasena = confirmaContrasenaInput.value;

            // Verificar si las contraseñas coinciden
            const contrasenasCoinciden = contrasena === confirmaContrasena;

            // Actualizar el color del campo de confirmación de contraseña
            if (contrasenasCoinciden && contrasena !== '') {
                confirmaContrasenaInput.classList.remove('border-danger');
                confirmaContrasenaInput.classList.add('border-success');
            } else {
                confirmaContrasenaInput.classList.remove('border-success');
                confirmaContrasenaInput.classList.add('border-danger');
            }
        }



    });

</script>
