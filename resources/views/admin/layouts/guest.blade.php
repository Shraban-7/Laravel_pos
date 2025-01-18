<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset("assets/vendors/mdi/css/materialdesignicons.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendors/ti-icons/css/themify-icons.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendors/css/vendor.bundle.base.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendors/font-awesome/css/font-awesome.min.css") }}">

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset("assets/images/favicon.png") }}" />
  </head>
  <body>

    @yield('content')

    <script src="{{ asset("assets/vendors/js/vendor.bundle.base.js") }}"></script>

    <!-- js -->
    <script src="{{ asset("assets/js/off-canvas.js") }}"></script>
    <script src="{{ asset("assets/js/misc.js") }}"></script>
    <script src="{{ asset("assets/js/settings.js") }}"></script>
    <script src="{{ asset("assets/js/todolist.js") }}"></script>
    <script src="{{ asset("assets/js/jquery.cookie.js") }}"></script>

  </body>
</html>
