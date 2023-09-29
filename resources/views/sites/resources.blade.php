<?php
    use App\Helpers\NavigationArrowDirection;
?>
<x-site-template>
    <x-slot:siteTitle>Resources - {{ config('constants.MY_FULL_NAME') }}</x-slot>
    <div class="resources-container">
        <div class="center-items">
            <x-site-heading siteHeading="Resources"/>
        </div>
        <div class="main center-items resources-main-content-wrapper">
            <x-download-resource-cards/>
        </div>
        <x-navigation-arrow
            :rotation="NavigationArrowDirection::DOWN"
            linkLocation="/"
            iconOnHover="'icons/home.svg'"
        />
    </div>
</x-site-template>