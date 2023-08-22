<?php
    use App\Helper\NavigationArrowDirection;
    use Illuminate\Support\Facades\Cookie;

    Cookie::queue(Cookie::make('alreadyVisited', '', 20));
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
            <x-navigation-arrow :rotation="NavigationArrowDirection::UP" linkLocation="/"/>
            <x-navigation-arrow :rotation="NavigationArrowDirection::LEFT" linkLocation="/"/>
            <div class="main center-items">
                @if(COOKIE::get('alreadyVisited') !== null)
                    <div class="typing-already-visited">
                        Hi, I`m Bene.
                    </div>
                @else
                    <div class="typing">
                        Hi, I`m Bene.
                    </div>
                @endif
            </div>
            <x-navigation-arrow :rotation="NavigationArrowDirection::RIGHT" linkLocation="/"/>
            <x-navigation-arrow :rotation="NavigationArrowDirection::DOWN" linkLocation="/contact"/>
        </div>
    </body>
</html>