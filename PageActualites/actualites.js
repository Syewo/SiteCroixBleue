
function searchTitles() {
    let input = document.getElementById('searchInput');
    let filter = input.value.toLowerCase();
    let fiches = document.querySelectorAll('.fichiers');

    fiches.forEach(fiche => {
        let title = fiche.querySelector('h3');
        if (title && title.innerText.toLowerCase().indexOf(filter) > -1) {
            fiche.style.display = '';
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

document.addEventListener('DOMContentLoaded', () => {
    const itemsPerPage = 6; // 2 lignes de 3 éléments = 6 éléments par page
    const fiches = Array.from(document.querySelectorAll('.fichier'));
    const paginationContainer = document.getElementById('pagination');

    let currentPage = 1;

    function renderPage(page) {
        const startIndex = (page - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;

        // Afficher ou masquer les fiches
        fiches.forEach((fiche, index) => {
            fiche.style.display = (index >= startIndex && index < endIndex) ? '' : 'none';
        });

        renderPagination();
        window.scrollTo({ top: 0, behavior: 'smooth' }); // Retour en haut de la page
    }

    function renderPagination() {
        paginationContainer.innerHTML = ''; // Réinitialiser la pagination
        const totalPages = Math.ceil(fiches.length / itemsPerPage);

        for (let i = 1; i <= totalPages; i++) {
            const pageButton = document.createElement('button');
            pageButton.textContent = i;
            pageButton.className = 'pagination-button btn btn-outline-primary m-1'; // Ajout de style
            pageButton.addEventListener('click', () => {
                currentPage = i;
                renderPage(currentPage);
            });

            if (i === currentPage) {
                pageButton.classList.add('active'); // Indiquer la page active
            }

            paginationContainer.appendChild(pageButton);
        }
    }

    renderPage(currentPage); // Charger la première page au démarrage
});

