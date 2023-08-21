<?php
    use App\Helper\NavigationArrowDirection;
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>Benedikt Hollerauer</title>
    </head>
    <body style="margin: 0; padding: 0;">
        <div class="home-container">
            <div class="top navigation-item center-items">
                <x-navigation-arrow :rotation="NavigationArrowDirection::UP"/>
            </div>
            <div class="left navigation-item center-items">
                <x-navigation-arrow :rotation="NavigationArrowDirection::LEFT"/>
            </div>
            <div class="main center-items">
                main
            </div>
            <div class="right navigation-item center-items">
                <x-navigation-arrow :rotation="NavigationArrowDirection::RIGHT"/>
            </div>
            <div class="bottom navigation-item center-items">
                <x-navigation-arrow :rotation="NavigationArrowDirection::DOWN"/>
            </div>
        </div>
    </body>
</html>