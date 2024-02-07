<script src="js/navigation-arrow.js"></script>
<a
    href="{{ $linkLocation }}"
    class="{{ $rotation->getRotationName() }}"
>
    <div class="navigation-item center-items"
        onmouseover="changeNavigationArrowImageSource(
            {{ $iconOnHover }},
            'navigation-arrow-{{ $rotation->getRotationName() }}',
            '{{ $rotation->getRotationName() }}'
        )"
        onmouseout="restoreNavigationArrow(
            '{{ $rotation->getRotationName() }}',
            '{{ $rotation->getDegreeForRotation() }}'
        )"
        >
        <div
            id="img-wrapper-{{ $rotation->getRotationName() }}"
            style="transform: rotate({{ $rotation->getDegreeForRotation() }}deg);"
        >
            <img
                id="navigation-arrow-{{ $rotation->getRotationName() }}"
                class="navigation-arrow-img"
                src="images/navigation-arrow.svg"
                alt="Navigation Icon"
            />
        </div>
    </div>
</a>
<script>
    window.addEventListener("resize", function() {
        changeIconIfMobile(
            <?php echo $iconOnHover ?>,
            "navigation-arrow-{{ $rotation->getRotationName() }}",
            "img-wrapper-{{ $rotation->getRotationName() }}",
            "{{ $rotation->getDegreeForRotation() }}"
        );
    });
    window.addEventListener("load", function() {
        changeIconIfMobile(
            <?php echo $iconOnHover ?>,
            "navigation-arrow-{{ $rotation->getRotationName() }}",
            "img-wrapper-{{ $rotation->getRotationName() }}",
            "{{ $rotation->getDegreeForRotation() }}"
        );
    });
</script>