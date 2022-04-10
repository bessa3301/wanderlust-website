<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.8.1/dist/cdn.min.js"></script>
    @livewireStyles
    <title> Wanderlust </title>
</head>

<body>
    <x-navbar />
    {{ $slot }}
    <x-footer />
    @livewireScripts
</body>

</html>
