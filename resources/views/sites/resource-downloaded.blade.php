<?php
    use App\Helpers\NavigationArrowDirection;
?>
<x-site-template>
    <x-slot:siteTitle>Resource Downloaded - {{ config('constants.MY_FULL_NAME') }}</x-slot>
        <div class="resource-download-container">
            <x-background-card>
                {{ $message }}
            </x-background-card>
            <x-navigation-arrow :rotation="NavigationArrowDirection::DOWN" linkLocation="/resources"
                iconOnHover="'images/resources.svg'"/>
        </div>
</x-site-template>