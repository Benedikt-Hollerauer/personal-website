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
        <x-navigation-arrow :rotation="NavigationArrowDirection::UP->getDegreeForRotation()"/>
        <x-navigation-arrow :rotation="NavigationArrowDirection::RIGHT->getDegreeForRotation()"/>
        <x-navigation-arrow :rotation="NavigationArrowDirection::DOWN->getDegreeForRotation()"/>
        <x-navigation-arrow :rotation="NavigationArrowDirection::LEFT->getDegreeForRotation()"/>
    </body>
</html>