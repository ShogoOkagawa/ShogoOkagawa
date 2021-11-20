<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale() ) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  
  <!-- Script -->
  <script src="{{ mix('js/app.js') }}" defer></script>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!-- Style -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
    @component('components.header')
    @endcomponent

    @component('components.flash')
    @endcomponent

    <main>
      <div class="container-fruid h-100 p-2 d-flex flex-column">
        @yield('content')
      </div>
    </main>

    @component('components.footer')
    @endcomponent
  </div>
</body>
</html>