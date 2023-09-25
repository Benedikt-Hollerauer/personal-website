<?php
    use App\Helpers\NavigationArrowDirection;
?>
<x-site-template>
    <x-slot:siteTitle>Contact - Benedikt Hollerauer</x-slot>
    <div class="contact-container">
        <x-navigation-arrow :rotation="NavigationArrowDirection::UP" linkLocation="/"/>
        <div class="main center-items">
            <x-contact-form/>
        </div>
        <x-site-heading siteHeading="Contact"/>
    </div>
</x-site-template>