<?php
    use App\Helpers\NavigationArrowDirection;
?>
<x-site-template>
    <x-slot:siteTitle>Resources - Benedikt Hollerauer</x-slot>
    <div class="resources-container">
        <div class="main center-items resources-main-content-wrapper">
            <div class="site-title">Resources</div>
            <x-download-resource-cards/>
        </div>
        <x-navigation-arrow :rotation="NavigationArrowDirection::DOWN" linkLocation="/"/>
    </div>
</x-site-template>