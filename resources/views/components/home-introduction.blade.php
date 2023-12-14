<?php
    use Illuminate\Support\Facades\Cookie;

    Cookie::queue(Cookie::make('alreadyVisited', '', 20));
?>
<div id="wrapper-introduction">
    @if(COOKIE::get('alreadyVisited') !== null)
    <div class="container">
        <div class="text-already-visited">
            Feel free to explora 🗺️
        </div>
    </div>
    @else
    <div class="container">
        <div class="text"></div>
    </div>
    @endif
</div>
<script src="js/home-introduction.js"></script>