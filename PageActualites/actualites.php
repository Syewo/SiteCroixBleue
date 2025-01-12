<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ACTUALITES - La Croix Bleue</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="actualites.css">
</head>
<body>
<script src="actualites.js"></script>
<?php require_once '../squelette/header.php'; ?>

<div class="haut">
    <h1>ACTUALITES</h1>
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Rechercher un titre..." onkeyup="searchTitles()">
    </div>
</div>

<div class="ligne"></div>

<div class="conteneur-fichiers" id="fichiersContainer">
    <div class="fichier">
        <h3>Titre de l'actualité 1</h3>
        <img src="../images/image_Actualites.png" alt="Logo PDF">
        <h5>Résumé de l'actualité 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis risus eu nisi volutpat, a maximus nunc hendrerit. Quisque vitae dui id risus volutpat porttitor vitae a libero. Nulla semper finibus ante et sollicitudin. Donec posuere, augue convallis fringilla interdum, diam orci euismod lectus, a vestibulum nisi massa finibus felis. Pellentesque venenatis porttitor auctor. Nam eu neque vel dui tempor venenatis.</h5>
        <button class="bouton-plus">En savoir plus</button>
    </div>
    <div class="fichier">
        <h3>Titre de l'actualité 2</h3>
        <img src="../images/image_Actualites.png" alt="Logo PDF">
        <h5>Résumé de l'actualité 2: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis risus eu nisi volutpat, a maximus nunc hendrerit. Quisque vitae dui id risus volutpat porttitor vitae a libero. Nulla semper finibus ante et sollicitudin. Donec posuere, augue convallis fringilla interdum, diam orci euismod lectus, a vestibulum nisi massa finibus felis. Pellentesque venenatis porttitor auctor. Nam eu neque vel dui tempor venenatis.</h5>
        <button class="bouton-plus">En savoir plus</button>
    </div>
    <div class="fichier">
        <h3>Titre de l'actualité 3</h3>
        <img src="../images/image_Actualites.png" alt="Logo PDF">
        <h5>Résumé de l'actualité 3: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis risus eu nisi volutpat, a maximus nunc hendrerit. Quisque vitae dui id risus volutpat porttitor vitae a libero. Nulla semper finibus ante et sollicitudin. Donec posuere, augue convallis fringilla interdum, diam orci euismod lectus, a vestibulum nisi massa finibus felis. Pellentesque venenatis porttitor auctor. Nam eu neque vel dui tempor venenatis.</h5>
        <button class="bouton-plus">En savoir plus</button>
    </div>
    <div class="fichier">
        <h3>Titre de l'actualité 4</h3>
        <img src="../images/image_Actualites.png" alt="Logo PDF">
        <h5>Résumé de l'actualité 4: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis risus eu nisi volutpat, a maximus nunc hendrerit. Quisque vitae dui id risus volutpat porttitor vitae a libero. Nulla semper finibus ante et sollicitudin. Donec posuere, augue convallis fringilla interdum, diam orci euismod lectus, a vestibulum nisi massa finibus felis. Pellentesque venenatis porttitor auctor. Nam eu neque vel dui tempor venenatis.</h5>
        <button class="bouton-plus">En savoir plus</button>
    </div>
    <div class="fichier">
        <h3>Titre de l'actualité 5</h3>
        <img src="../images/image_Actualites.png" alt="Logo PDF">
        <h5>Résumé de l'actualité 5: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis risus eu nisi volutpat, a maximus nunc hendrerit. Quisque vitae dui id risus volutpat porttitor vitae a libero. Nulla semper finibus ante et sollicitudin. Donec posuere, augue convallis fringilla interdum, diam orci euismod lectus, a vestibulum nisi massa finibus felis. Pellentesque venenatis porttitor auctor. Nam eu neque vel dui tempor venenatis.</h5>
        <button class="bouton-plus">En savoir plus</button>
    </div>
    <div class="fichier">
        <h3>Titre de l'actualité 6</h3>
        <img src="../images/image_Actualites.png" alt="Logo PDF">
        <h5>Résumé de l'actualité 6: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis risus eu nisi volutpat, a maximus nunc hendrerit. Quisque vitae dui id risus volutpat porttitor vitae a libero. Nulla semper finibus ante et sollicitudin. Donec posuere, augue convallis fringilla interdum, diam orci euismod lectus, a vestibulum nisi massa finibus felis. Pellentesque venenatis porttitor auctor. Nam eu neque vel dui tempor venenatis.</h5>
        <button class="bouton-plus">En savoir plus</button>
    </div>
    <div class="fichier">
        <h3>Titre de l'actualité 7</h3>
        <img src="../images/image_Actualites.png" alt="Logo PDF">
        <h5>Résumé de l'actualité 7: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis risus eu nisi volutpat, a maximus nunc hendrerit. Quisque vitae dui id risus volutpat porttitor vitae a libero. Nulla semper finibus ante et sollicitudin. Donec posuere, augue convallis fringilla interdum, diam orci euismod lectus, a vestibulum nisi massa finibus felis. Pellentesque venenatis porttitor auctor. Nam eu neque vel dui tempor venenatis.</h5>
        <button class="bouton-plus">En savoir plus</button>
    </div>
    <div class="fichier">
        <h3>Titre de l'actualité 8</h3>
        <img src="../images/image_Actualites.png" alt="Logo PDF">
        <h5>Résumé de l'actualité 8: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis risus eu nisi volutpat, a maximus nunc hendrerit. Quisque vitae dui id risus volutpat porttitor vitae a libero. Nulla semper finibus ante et sollicitudin. Donec posuere, augue convallis fringilla interdum, diam orci euismod lectus, a vestibulum nisi massa finibus felis. Pellentesque venenatis porttitor auctor. Nam eu neque vel dui tempor venenatis.</h5>
        <button class="bouton-plus">En savoir plus</button>
    </div>
    <div class="fichier">
        <h3>Titre de l'actualité 9</h3>
        <img src="../images/image_Actualites.png" alt="Logo PDF">
        <h5>Résumé de l'actualité 9: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis risus eu nisi volutpat, a maximus nunc hendrerit. Quisque vitae dui id risus volutpat porttitor vitae a libero. Nulla semper finibus ante et sollicitudin. Donec posuere, augue convallis fringilla interdum, diam orci euismod lectus, a vestibulum nisi massa finibus felis. Pellentesque venenatis porttitor auctor. Nam eu neque vel dui tempor venenatis.</h5>
        <button class="bouton-plus">En savoir plus</button>
    </div>
    <!-- Ajoutez les autres fiches ici -->
</div>

<div id="pagination" class="pagination d-flex justify-content-center mt-4"></div>

<?php require_once '../squelette/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
