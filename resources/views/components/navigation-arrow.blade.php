<script src="js/navigation-arrow.js"></script>
<a href="{{ $linkLocation }}" class="{{ $rotation->getRotationName() }}">
    <div class="navigation-item center-items"
        onmouseover="changeNavigationArrowImageSource(
            'icon/home.svg',
            'navigation-arrow-{{ $rotation->getRotationName() }}',
            '{{ $rotation->getRotationName() }}'
        )"
        onmouseout="restoreNavigationArrow(
            '{{ $rotation->getRotationName() }}',
            '{{ $rotation->getDegreeForRotation() }}'
        )"
        >
        <div id="img-wrapper-{{ $rotation->getRotationName() }}" style="transform: rotate({{ $rotation->getDegreeForRotation() }}deg);">
            <img id="navigation-arrow-{{ $rotation->getRotationName() }}" class="navigation-arrow-img" src="icon/navigation-arrow.svg" alt="Navigation Icon"/>
        </div>
    </div>
</a>