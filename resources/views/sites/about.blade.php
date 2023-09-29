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
            <x-about-me-text/>
            <x-skill-cards/>
            <x-timeline/>
        </div>
    </div>
</x-site-template>