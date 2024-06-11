<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/responsive.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/pickers/form-flat-pickr.css')}}">
    <!-- END: Page CSS-->
        <!-- Scripts -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    </head>
    <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="" data-framework="laravel">
        @include('layouts.navigation')
        <main>
            {{ $slot }}
        </main>
        <!-- BEGIN: Vendor JS-->
        <script src="{{asset('vendors/js/vendors.min.js')}}"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="{{asset('vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
        <script src="{{asset('vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('vendors/js/tables/datatable/responsive.bootstrap5.js')}}"></script>
        <script src="{{asset('vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="{{asset('js/core/app-menu.js')}}"></script>
        <script src="{{asset('js/core/app.js')}}"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="{{asset('js/scripts/tables/table-datatables-advanced.js')}}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    </body>
</html>
