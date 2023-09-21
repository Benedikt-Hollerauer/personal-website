<script src="js/navigation-arrow.js"></script>
<a id="link-{{ $rotation->getRotationName() }}" href="{{ $linkLocation }}" class="{{ $rotation->getRotationName() }}">
    <div class="navigation-item center-items" onmouseover="changeNavigationArrowImageSource(
            'icon/home.svg',
            'navigation-arrow-{{ $rotation->getRotationName() }}',
            '{{ $rotation->getRotationName() }}')"
        >
        <div id="navigation-arrow-{{ $rotation->getRotationName() }}" style="transform: rotate({{ $rotation->getDegreeForRotation() }}deg);">
            <img id="navigation-arrow-img" src="icon/navigation-arrow.svg" alt="Navigation Icon"/>
        </div>
    </div>
</a>