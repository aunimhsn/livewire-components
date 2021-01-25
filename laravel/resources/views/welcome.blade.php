<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Livewire | Components</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('favicon.png') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Tailwind -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Alpine JS -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

        @livewireStyles
    </head>
    <body class="antialiased bg-gray-200">
        
        @livewire('counter')
        
        @livewireScripts
    </body>
</html>
