{{-- qui inserisco la struttura di base --}}

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('pageTitle')</title>
    {{-- inserisco il link che punta al css convertito di sass da blade tramite asset che punta
    direttamente alla cartella public/css  --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <div class="container">
      {{-- includo l' header con @include che punta alla cartella views --}}
      @include('partials.header')
      {{-- creo uno @yeld che è praticamente un segnaposto --}}
      @yield('bodyContent')
      {{-- includo il footer --}}
      @include('partials.footer')
    </div>
  </body>


</html>
