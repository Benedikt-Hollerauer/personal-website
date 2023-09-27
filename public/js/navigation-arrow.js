function changeNavigationArrowImageSource(
    newImageSource,
    imageId,
    rotation
) {
    document.getElementById(
        imageId
    ).src = newImageSource;
    document.getElementById("link-" + rotation)
        .style
        .transform
        .rotation = 0
}

function restoreNavigationArrow(
    imageId,
    rotationDegree
) {
    let image = document.getElementById(imageId)
    image.src = "icon/navigation-arrow.svg"
    image.style
        .transform
        .rotation = rotationDegree
}