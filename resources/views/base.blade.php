<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">







     <title>{{ config('app.name') }} - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/app.css')}}">
  </head>
  <body>



    @include('template.navbar')

        <div class="container">

            @yield('content')


            @include('script')
        </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
