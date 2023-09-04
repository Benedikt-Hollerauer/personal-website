<?php
    use App\Helper\NavigationArrowDirection;
    use Illuminate\Support\Facades\Cookie;

    Cookie::queue(Cookie::make('alreadyVisited', '', 20));
?>
<x-site-template>
    <x-slot:siteTitle>Benedikt Hollerauer</x-slot>
    <div class="home-container">
        <x-navigation-arrow :rotation="NavigationArrowDirection::UP" linkLocation="/"/>
        <x-navigation-arrow :rotation="NavigationArrowDirection::LEFT" linkLocation="/about"/>
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
        <x-navigation-arrow :rotation="NavigationArrowDirection::RIGHT" linkLocation="/projects"/>
        <x-navigation-arrow :rotation="NavigationArrowDirection::DOWN" linkLocation="/contact"/>
    </div>
</x-site-template>