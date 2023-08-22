<a href="{{ $linkLocation }}" class="{{ $rotation->getRotationName() }}" wire:navigate>
    <div class="navigation-item center-items">
        <div id="navigation-arrow" style="transform: rotate({{ $rotation->getDegreeForRotation() }}deg);">
            <img src="icon/navigation-arrow.svg" alt="Navigation Arrow Icon">
        </div>
    </div>
</a>