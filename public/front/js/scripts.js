// navbar fixed
window.onscroll = function () {
    const header = document.querySelector("header");
    const navFixed = header.offsetTop;

    if (window.scrollY > navFixed) {
        header.classList.add("navbar-fixed");
    } else {
        header.classList.remove("navbar-fixed");
    }
};

// Hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");
const dropdownToggles = document.querySelectorAll(".dropdown-toggle");
hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

    // Toggle dropdown menu in mobile view
    dropdownToggles.forEach((toggle) => {
        toggle.addEventListener("click", function (event) {
            if (window.innerWidth < 1024) {
                const dropdownMenu = toggle.nextElementSibling;
                dropdownMenu.classList.toggle("opacity-100");
                dropdownMenu.classList.toggle("scale-y-100");
                dropdownMenu.classList.toggle("pointer-events-auto");
                event.preventDefault();
            }
        });
    });