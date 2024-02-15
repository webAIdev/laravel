$(document).ready(function () {
    var innerHTML = "";

    $("#show_menu").click(function () {
        $("div").animate({ left: "250px" });
    });

    // Variables
    const carousel = document.querySelector(".carousel");
    const carouselInner = document.querySelector(".carousel-inner");
    const carouselItems = document.querySelectorAll(".carousel-item");
    let currentIndex = 0;
    let rotateY = 0;

    // Function to rotate the carousel
    function rotateCarousel() {
        rotateY = -currentIndex * 60; /* Adjust the rotation angle as desired */
        carouselInner.style.transform = `translateZ(-200px) rotateY(${rotateY}deg)`;
    }

    // Function to handle next button click
    function next() {
        currentIndex++;
        if (currentIndex >= carouselItems.length) {
            currentIndex = 0;
        }
        rotateCarousel();
    }

    // Function to handle previous button click
    function previous() {
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = carouselItems.length - 1;
        }
        rotateCarousel();
    }

    // Attach event listeners to next and previous buttons
    document.getElementById("next-btn").addEventListener("click", next);
    document.getElementById("prev-btn").addEventListener("click", previous);
});
