<?php
    use App\Helpers\NavigationArrowDirection;
?>
<x-site-template>
    <x-slot:siteTitle>Projects - Benedikt Hollerauer</x-slot>
    <div class="projects-container">
        <x-navigation-arrow :rotation="NavigationArrowDirection::LEFT" linkLocation="/"/>
        <div class="main center-items">
            <x-projects-slider/>
        </div>
    </div>
</x-site-template>