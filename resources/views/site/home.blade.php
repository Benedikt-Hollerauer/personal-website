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
    <body>
        <div class="home-container">
            <a href="{{ url(''); }}" class="top">
                <x-navigation-arrow :rotation="NavigationArrowDirection::UP"/>
            </a>
            <a href="{{ url(''); }}" class="left">
                <x-navigation-arrow :rotation="NavigationArrowDirection::LEFT"/>
            </a>
            <div class="main center-items">
                <div class="wrapper">
                    <div class="typing-demo">
                        Hi, I`m Bene.
                    </div>
                </div>
            </div>
            <a href="{{ url(''); }}" class="right">
                <x-navigation-arrow :rotation="NavigationArrowDirection::RIGHT"/>
            </a>
            <a href="{{ url(''); }}/contact"class="bottom">
                <x-navigation-arrow :rotation="NavigationArrowDirection::DOWN"/>
            </a>
        </div>
    </body>
</html>