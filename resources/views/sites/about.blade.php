<?php
    use App\Helper\NavigationArrowDirection;
?>
<x-site-template>
    <x-slot:siteTitle>About - Benedikt Hollerauer</x-slot>
    <div class="about-container">
        <x-navigation-arrow :rotation="NavigationArrowDirection::RIGHT" linkLocation="/"/>
        <div class="main center-items">
            About
        </div>
    </div>
</x-site-template>