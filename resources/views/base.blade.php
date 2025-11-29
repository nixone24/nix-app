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

            @yield('content')


            @include('script')




  </body>
</html>
