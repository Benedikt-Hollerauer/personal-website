<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="overflow-y: unset;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>{{ $siteTitle }}</title>
    </head>
    <body>
        <x-loading-screen/>
        {{ $slot }}
    </body>
</html>