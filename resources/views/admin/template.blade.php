<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets/admin/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.png') }}" type="image/x-icon">
    <title>Software Engineering | {{ $url }}</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/photoswipe.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('assets/admin/css/color-1.css') }}" media="screen">
    <script src="https://use.fontawesome.com/4278e3e5e4.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/icofont.min.css') }}">
    <script src="https://use.fontawesome.com/4278e3e5e4.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/icofont.min.css') }}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/responsive.css') }}">
    {{-- Menu --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('menu.css') }}">
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @livewireStyles
    @livewireScripts
</head>

<body onload="startTime()">
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        @include('admin.includes.topbar')
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            @include('admin.includes.sidebar')
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                @include('admin.includes.link')
                <!-- Container-fluid starts-->
                @yield('content')
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            @include('admin.includes.footer')
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('assets/admin/js/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/admin/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('assets/admin/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('assets/admin/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('assets/admin/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/admin/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('assets/admin/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chart/chartist/chartist.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chart/knob/knob-chart.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/admin/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/admin/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('assets/admin/js/notify/index.js') }}"></script>
    <script src="{{ asset('assets/admin/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/admin/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/admin/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/admin/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/admin/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/admin/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/admin/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('assets/admin/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/admin/js/form-wizard/form-wizard.js') }}"></script>
    <script src="{{ asset('assets/admin/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('assets/admin/js/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/photoswipe/photoswipe.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/ivorlc5d956j2mhp2ibwg3zknmi5jb03zeei4drawxaylv48/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    {{-- Menu --}}
    <script src="{{ asset('jquery.nestable.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('assets/admin/js/script.js') }}"></script>
    {{-- <script src="{{ asset('assets/admin/js/theme-customizer/customizer.js') }}"></script> --}}
    <!-- login js-->
    <!-- Plugin used-->

    <script>
        @yield('script')

    </script>
</body>

</html>
