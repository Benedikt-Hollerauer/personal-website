<?php
    use App\Helpers\NavigationArrowDirection;
?>
<x-site-template>
    <x-slot:siteTitle>About - Benedikt Hollerauer</x-slot>
    <div class="about-container">
        <x-navigation-arrow :rotation="NavigationArrowDirection::RIGHT" linkLocation="/"/>
        <div class="main">
            <x-timeline/>
        </div>
    </div>
</x-site-template>