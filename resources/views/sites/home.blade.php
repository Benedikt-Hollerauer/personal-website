<?php
    use App\Helpers\NavigationArrowDirection;
?>
<x-site-template>
    <x-slot:siteTitle>{{ config('constants.MY_FULL_NAME') }}</x-slot>
    <div class="home-container">
        <x-navigation-arrow
            :rotation="NavigationArrowDirection::UP"
            linkLocation="/resources"
            iconOnHover="'images/resources.svg'"
        />
        <x-navigation-arrow
            :rotation="NavigationArrowDirection::LEFT"
            linkLocation="/about"
            iconOnHover="'images/about.svg'"
        />
        <div class="spacer"></div>
        <div class="main center-items">
            <x-home-introduction/>
        </div>
        <div class="self-portrait center-items">
            <x-background-card>
                <img
                    id="self-portrait"
                    src="images/my-notion-avatar-laughing.png"
                    alt="Benedikt Hollerauer Self Portrait"
                >
            </x-background-card>
        </div>
        <div class="spacer"></div>
        <x-navigation-arrow
            :rotation="NavigationArrowDirection::RIGHT"
            linkLocation="/projects"
            iconOnHover="'images/projects.svg'"
        />
        <x-navigation-arrow
            :rotation="NavigationArrowDirection::DOWN"
            linkLocation="/contact"
            iconOnHover="'images/contact.svg'"
        />
    </div>
</x-site-template>