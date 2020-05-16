<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link rel="stylesheet" href="{{ asset('public/css/material-dashboard.css') }}" >

  <link rel="stylesheet" href="{{ asset('public/css/demo.css') }}" >

</head>
<body>


<main class="py-4">
            @yield('content')
        </main>
    </div>
</body>


   <script src="{{ asset('public/js/jquery.min.js') }}"></script>
   <script src="{{ asset('public/js/popper.min.js') }}"></script>
   <script src="{{ asset('public/js/bootstrap-material-design.min.js') }}"></script>
</html>
