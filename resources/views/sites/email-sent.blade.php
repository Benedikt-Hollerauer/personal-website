<?php
    use App\Helpers\NavigationArrowDirection;
?>
<x-site-template>
    <x-slot:siteTitle>Email Sent - {{ config('constants.MY_FULL_NAME') }}</x-slot>
        <div class="email-sent-container">
            <x-navigation-arrow :rotation="NavigationArrowDirection::UP" linkLocation="/contact"
                iconOnHover="'icons/contact.svg'"/>
            <x-background-card>
                {{ $message }}
            </x-background-card>
        </div>
</x-site-template>