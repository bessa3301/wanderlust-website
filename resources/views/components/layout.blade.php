<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title> Wanderlust </title>
</head>

<body>
    <x-navbar />
    {{ $slot }}
    <x-footer />
</body>

</html>
