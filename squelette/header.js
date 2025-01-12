function toggleMenu() {
    var menuHamburger = document.getElementById("menu-hamburger");

    if (menuHamburger.style.display === "block") {
        menuHamburger.style.display = "none";
    } else {
        menuHamburger.style.display = "block";
    }
}