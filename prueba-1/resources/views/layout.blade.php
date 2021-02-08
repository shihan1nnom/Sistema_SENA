<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS y JS-->
    <link rel="stylesheet" href="{{asset('contenido/css/bootstrap.min.css')}}">
    <script src="{{asset('plugins/js/bootstrap.bundle.min.js')}}"></script>

    <title>@yield('titulo') | SENA</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Piazzolla:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body {
            padding-top: 10px;
            padding-bottom: 20px;
            font-family: 'Piazzolla';
            background: url("{{asset('contenido/imagenes/fondo_68.jpg')}}");
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
    </style>

  </head>
  <body>
    <nav class="navbar navbar-light bg-light" style="opacity: 0.6">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}" style="margin-left: 20px">SENA</a>
      </div>
    </nav>
    <main class="container" style="padding-left: 30px; padding-right: 30px; margin-top: 30px;">
      @yield('contenido')
      <footer style="text-align: center; margin-top: 50px; margin-bottom: 30px; float: bottom">
          <span style="color: white">2021 - Creado por Shihan</span>
      </footer>
    </main>

  </body>
</html>

<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>
