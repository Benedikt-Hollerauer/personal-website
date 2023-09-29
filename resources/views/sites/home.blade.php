<?php
    use App\Helpers\NavigationArrowDirection;
    use Illuminate\Support\Facades\Cookie;

    Cookie::queue(Cookie::make('alreadyVisited', '', 20));
?>
<x-site-template>
    <x-slot:siteTitle>{{ config('constants.MY_FULL_NAME') }}</x-slot>
    <div class="home-container">
        <x-navigation-arrow
            :rotation="NavigationArrowDirection::UP"
            linkLocation="/resources"
            iconOnHover="'icons/resources.svg'"
        />
        <x-navigation-arrow
            :rotation="NavigationArrowDirection::LEFT"
            linkLocation="/about"
            iconOnHover="'icons/about.svg'"
        />
        <div class="main center-items">
            <x-background-card>
                @if(COOKIE::get('alreadyVisited') !== null)
                    <div class="typing-already-visited">
                        Hi, I`m {{ config('constants.MY_NICK_NAME') }}.
                    </div>
                @else
                    <div class="typing">
                        Hi, I`m {{ config('constants.MY_NICK_NAME') }}.
                    </div>
                @endif
            </x-background-card>
        </div>
        <x-navigation-arrow
            :rotation="NavigationArrowDirection::RIGHT"
            linkLocation="/projects"
            iconOnHover="'icons/projects.svg'"
        />
        <x-navigation-arrow
            :rotation="NavigationArrowDirection::DOWN"
            linkLocation="/contact"
            iconOnHover="'icons/contact.svg'"
        />
    </div>
</x-site-template>