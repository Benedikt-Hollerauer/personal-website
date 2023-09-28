function changeNavigationArrowImageSource(
    newImageSource,
    imageId,
    rotation
) {
    if(newImageSource == "") {
        newImageSource = "icons/navigation-arrow.svg"
    }
    document.getElementById(
        imageId
    ).src = newImageSource;
    document.getElementById("img-wrapper-" + rotation)
        .style
        .transform = "rotate(0deg)"
}

function restoreNavigationArrow(
    rotation,
    rotationDegree
) {
    document.getElementById("img-wrapper-" + rotation)
        .style
        .transform = "rotate(" + rotationDegree + "deg)"
    document.getElementById("navigation-arrow-" + rotation)
        .src = "icons/navigation-arrow.svg"
}