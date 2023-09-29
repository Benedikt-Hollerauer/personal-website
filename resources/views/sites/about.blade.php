<?php
    use App\Helpers\NavigationArrowDirection;
?>
<x-site-template>
    <x-slot:siteTitle>About - Benedikt Hollerauer</x-slot>
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
            <x-background-card>
                <x-skill-cards/>
            </x-background-card>
            <x-background-card>
                <x-timeline/>
            </x-background-card>
        </div>
    </div>
</x-site-template>