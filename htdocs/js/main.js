/**
 * Main js
 */
(function () {
    "use strict";

    var mePresentation = document.getElementById("me_presentation");
    var about = document.getElementById("about_img");
    var test = document.getElementById("test_img");
    var rapport = document.getElementById("rapport_img");
    var flashMountains = document.getElementById("flash-mountains");
    var flashForest = document.getElementsByClassName("flash-forest")[0];
    var flashTemple = document.getElementsByClassName("flash-temple")[0];

    changeImageSize();
    window.onresize = changeImageSize;
    window.onscroll = showLinkToTop;

    function changeImageSize() {
        /**
         * Change image size based on the current width of the browser window.
         */
        var width = window.innerWidth;

        var pathStart05 = "img/kmom05/";
        var pathStart06 = "img/kmom06/";
        var pathStart06D = "img/kmom06-design-principles/";

        var pathEnd = ".jpg";

        if (width >= 700) {
            if (mePresentation) {
                mePresentation.src = pathStart06 + "me-presentation480x640" + pathEnd;
            }
            if (about) {
                about.src = pathStart06 + "about600x400" + pathEnd;
            }
            if (test) {
                test.src = pathStart06 + "test600x414" + pathEnd;
            }
            if (rapport) {
                rapport.src = pathStart06 + "rapport600x418" + pathEnd;
            }
            if (flashMountains) {
                flashMountains.src = pathStart06D + "flash-mountains-desktop" + pathEnd;
            }
            if (flashForest) {
                flashForest.src = pathStart06D + "flash-forest-desktop" + pathEnd;
            }
            if (flashTemple) {
                flashTemple.src = pathStart05 + "flash-temple-desktop" + pathEnd;
            }
        } else {
            if (mePresentation) {
                mePresentation.src = pathStart06 + "me-presentation1080x1440" + pathEnd;
            }
            if (about) {
                about.src = pathStart06 + "about1080x720" + pathEnd;
            }
            if (test) {
                test.src = pathStart06 + "test1080x746" + pathEnd;
            }
            if (rapport) {
                rapport.src = pathStart06 + "rapport1080x754" + pathEnd;
            }
            if (flashMountains) {
                flashMountains.src = pathStart06D + "flash-mountains-mobile" + pathEnd;
            }
            if (flashForest) {
                flashForest.src = pathStart06D + "flash-forest-mobile" + pathEnd;
            }
            if (flashTemple) {
                flashTemple.src = pathStart05 + "flash-temple-mobile" + pathEnd;
            }
        }
    }

    function showLinkToTop() {
        /**
         * Hide the link to top button when the top of the page is
         * displayed.
         */
        var currentScrollPos = window.pageYOffset;
        var linkToTop = document.getElementById("link-to-top-page");

        if (currentScrollPos > 0) {
            linkToTop.style.display = "inline-block";
        } else {
            linkToTop.style.display = "none";
        }
    }
}());
