var slideIndex = 1;
var isAutomatic = true;
var delay = 1000;

function plusSlides(n) {
    if (!isAutomatic)
        showSlides(slideIndex += n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++)
        slides[i].style.display = "none";
    slides[slideIndex - 1].style.display = "block";

}

var slideIndex = 0;
// automatic slideshow
function showAutomaticSlides() {
    if (isAutomatic) {
        // check for delay changes
        var new_delay = document.getElementById('delay').value;
        if (new_delay !== '') {
            delay = parseInt(new_delay) * 1000;
        }
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showAutomaticSlides, delay); // Change image every 2 seconds
    }
}

// button toggle
function toggle() {
    var btn = document.getElementById("btn");
    if (btn.innerHTML == "Turn OFF Automatic Slideshow") {
        btn.innerHTML = "Turn ON Automatic Slideshow";
        isAutomatic = false;
    } else {
        btn.innerHTML = "Turn OFF Automatic Slideshow";
        isAutomatic = true;
        showAutomaticSlides();
    }
}

// start automatic slideshow
showAutomaticSlides();