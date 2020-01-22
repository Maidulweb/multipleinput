<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('page_meta')
    @yield('title') 
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,500i,700,900" rel="stylesheet">
</head>
<body>



     

  @include ('layouts.header')
  @yield ('content')
  @include ('layouts.footer')
  

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
