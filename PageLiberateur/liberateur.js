// Fonction pour rechercher et filtrer les titres
function searchTitles() {
    let input = document.getElementById('searchInput');
    let filter = input.value.toLowerCase();
    let fiches = document.querySelectorAll('.fichiers'); // Sélectionner toutes les divs avec la classe "fichiers"

    fiches.forEach(fiche => {
        let title = fiche.querySelector('h3'); // Chercher le titre dans chaque fiche
        if (title && title.innerText.toLowerCase().indexOf(filter) > -1) {
            fiche.style.display = ''; // Si le titre correspond, on affiche la fiche
        } else {
            fiche.style.display = 'none';
        }
    });
}


function toggleMenu() {
    var menuHamburger = document.getElementById("menu-hamburger");

    if (menuHamburger.style.display === "block") {
        menuHamburger.style.display = "none";
    } else {
        menuHamburger.style.display = "block";
    }
}