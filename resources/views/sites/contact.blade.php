<?php
    use App\Helpers\NavigationArrowDirection;
?>
<x-site-template>
    <x-slot:siteTitle>Contact - {{ config('constants.MY_FULL_NAME') }}</x-slot>
        <div class="contact-container">
            <x-navigation-arrow :rotation="NavigationArrowDirection::UP" linkLocation="/"
                iconOnHover="'icons/home.svg'" />
            <div class="contact-form-site-wrapper main center-items">
                <div id="wrapper-contact-form-background-card">
                    <x-background-card>
                        <x-contact-form />
                    </x-background-card>
                </div>
            </div>
            <x-site-heading siteHeading="Contact" />
        </div>
</x-site-template>