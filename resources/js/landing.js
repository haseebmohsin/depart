document.addEventListener("scroll", function() {
    /*Apply classes for slide in bar*/
    scrollpos = window.scrollY;
    let header = document.getElementById("header");
    let navcontent = document.getElementById("nav-content");
    let toToggle = document.querySelectorAll(".toggleColour");

    if (scrollpos > 10) {
        header.classList.add("bg-gray-100");
        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
        }
        header.classList.add("shadow");
        navcontent.classList.remove("bg-gray-100");
        navcontent.classList.add("bg-gray-100");
    } else {
        header.classList.remove("bg-gray-100");
        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
        }

        header.classList.remove("shadow");
        navcontent.classList.remove("bg-gray-100");
        navcontent.classList.add("bg-gray-100");
    }
});

/*Toggle dropdown list*/
/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

var navMenu = document.getElementById("nav-toggle");
var navMenuDiv = document.getElementById("nav-content");

document.onclick = check;

function check(e) {
    var target = (e && e.target) || (event && event.srcElement);

    //Nav Menu
    if (!checkParent(target, navMenuDiv)) {
        // click NOT on the menu
        if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
                navMenuDiv.classList.remove("hidden");
            } else {
                navMenuDiv.classList.add("hidden");
            }
        } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
        }
    }
}

function checkParent(t, elm) {
    while (t.parentNode) {
        if (t == elm) {
            return true;
        }
        t = t.parentNode;
    }
    return false;
}
