<?php
    use App\Helper\NavigationArrowDirection;
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>Contact - Benedikt Hollerauer</title>
    </head>
    <body>
        <div class="contact-container">
            <x-loading-screen/>
            <x-navigation-arrow :rotation="NavigationArrowDirection::UP" linkLocation="/"/>
            <div class="main center-items">
                content
            </div>
        </div>
    </body>
</html>