<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Freelancer Job</title>
        <script defer src="https://unpkg.com/alpinejs@3.9.3/dist/cdn.min.js"></script>
        @livewireStyles
    </head>
    <body>
      <div class="container mx-auto px-4">
          @include('partials.navbar')
          @yield('content')
      </div>

    @livewireScripts
    </body>
</html>
