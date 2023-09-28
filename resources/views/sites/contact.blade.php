<?php
    use App\Helpers\NavigationArrowDirection;
?>
<x-site-template>
    <x-slot:siteTitle>Contact - Benedikt Hollerauer</x-slot>
    <div class="contact-container">
        <x-navigation-arrow
            :rotation="NavigationArrowDirection::UP"
            linkLocation="/"
            iconOnHover="'icons/home.svg'"
        />
        <div class="contact-form-site-wrapper main center-items">
            <x-contact-form/>
        </div>
        <x-site-heading siteHeading="Contact"/>
    </div>
</x-site-template>