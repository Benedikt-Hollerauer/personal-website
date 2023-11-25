function changeNavigationArrowImageSource(newImageSource, imageId, rotation) {
    if (newImageSource === "") {
        newImageSource = "images/navigation-arrow.svg";
    }

    const imageElement = document.getElementById(imageId);
    const rotationElement = document.getElementById("img-wrapper-" + rotation);

    imageElement.src = newImageSource;
    rotationElement.style.transform = "rotate(0deg)";
}

function restoreNavigationArrow(rotation, rotationDegree) {
    const rotationElement = document.getElementById("img-wrapper-" + rotation);
    const navigationArrowElement = document.getElementById(
        "navigation-arrow-" + rotation
    );

    rotationElement.style.transform = "rotate(" + rotationDegree + "deg)";
    navigationArrowElement.src = "images/navigation-arrow.svg";
}

function changeIconIfMobile(
    newImageSource,
    imageId,
    imageWrapperId,
    rotationDegree
) {
    const imageElement = document.getElementById(imageId);
    const imageWrapperElement = document.getElementById(imageWrapperId);
    const viewportWidth =
        window.innerWidth || document.documentElement.clientWidth;

    if (viewportWidth <= 1024) {
        imageElement.src = newImageSource;
        imageWrapperElement.style.transform = "rotate(0deg)";
    } else {
        imageElement.src = "images/navigation-arrow.svg";
        imageWrapperElement.style.transform =
            "rotate(" + rotationDegree + "deg)";
    }
}