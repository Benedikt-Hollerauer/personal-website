<?php
    use App\Helpers\NavigationArrowDirection;
?>
<x-site-template>
    <x-slot:siteTitle>Projects - {{ config('constants.MY_FULL_NAME') }}</x-slot>
        <div class="projects-container">
            <x-site-heading siteHeading="Projects" />
            <x-navigation-arrow :rotation="NavigationArrowDirection::LEFT" linkLocation="/"
                iconOnHover="'icons/home.svg'" />
            <div class="main center-items">
                <x-projects-slider />
            </div>
        </div>
</x-site-template>