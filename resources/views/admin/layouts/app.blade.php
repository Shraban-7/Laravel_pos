<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/admin/images/favicon/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/dropzone/dist/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">

    <!-- <link href="assets/admin/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
        <link href="assets/admin/libs/prismjs/themes/okaidia.css" rel="stylesheet"> -->

    <title>@yield('title')</title>
</head>

<body>
    <div class="container-scroller">
        <div id="db-wrapper">
            @include('admin.partials.sidebar')
            <div id="page-content">
                <div class="header">
                    @include('admin.partials.navbar')
                </div>

                <div class="container-fluid my-5 px-6">
                    <x-flash-message />
                    @yield('content')
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('assets/admin/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <script src="{{ asset('assets/admin/libs/prismjs/prism.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/prismjs/plugins/toolbar/prism-toolbar.min.js') }}"></script>

    <!-- <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="./assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script> -->
    <!-- Theme JS -->
    <script src="{{ asset('assets/admin/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/feather.js') }}"></script>
    @stack('footer')
</body>

</html>
