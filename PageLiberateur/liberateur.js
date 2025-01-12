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