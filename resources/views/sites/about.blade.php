<?php
    use App\Helpers\NavigationArrowDirection;
?>
<x-site-template>
    <x-slot:siteTitle>About - {{ config('constants.MY_FULL_NAME') }}</x-slot>
    <div class="about-container">
        <x-site-heading siteHeading="About"/>
        <x-navigation-arrow
            :rotation="NavigationArrowDirection::RIGHT"
            linkLocation="/"
            iconOnHover="'icons/home.svg'"
        />
        <div class="main scroll-section">
            <x-background-card>
                <x-about-me-text/>
            </x-background-card>
            <h1 class="section-heading">
                <x-background-card>These are my current skills</x-background-card>
            </h1>
            <x-background-card>
                <x-skill-cards/>
            </x-background-card>
            <h1 class="section-heading">
                <x-background-card>And here is my career until now</x-background-card>
            </h1>
            <x-background-card>
                <x-timeline/>
            </x-background-card>
        </div>
    </div>
</x-site-template>