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
        .transform = "rotate(0deg)";
}

function restoreNavigationArrow(
    rotation,
    rotationDegree
) {
    document.getElementById("img-wrapper-" + rotation)
        .style
        .transform = "rotate(" + rotationDegree + "deg)";
    document.getElementById("navigation-arrow-" + rotation)
        .src = "icons/navigation-arrow.svg";
}

function changeIconIfMobile(
    newImageSource,
    imageId,
    imageWrapperId,
    rotationDegree
) {
    let image = document.getElementById(imageId);
    let imageWrapper = document.getElementById(imageWrapperId)
    let viewportWidth = window.innerWidth || document.documentElement.clientWidth;
    if(viewportWidth <= 1024) {
        image.src = newImageSource;
        imageWrapper.style
            .transform = "rotate(0deg)";
    } else {
        image.src = "icons/navigation-arrow.svg";
        imageWrapper
            .style
            .transform = "rotate(" + rotationDegree + "deg)";
    }
}