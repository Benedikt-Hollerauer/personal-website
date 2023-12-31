<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link
            rel="icon shortcut"
            type="image/x-icon"
            href="images/hb-logo-white-transparent.svg" 
        >
        <title>{{ $siteTitle }}</title>
    </head>
    <body>
        <x-loading-screen/>
        {{ $slot }}
    </body>
</html>