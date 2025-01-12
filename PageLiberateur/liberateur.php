<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>LIBERATEUR - La Croix Bleue</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="liberateur.css">

</head>
<body>
<script src="liberateur.js"></script>
<?php require_once '../squelette/header.php'; ?>


<div class="haut">
    <h1>LIBERATEUR</h1>
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Rechercher un titre..." onkeyup="searchTitles()">
    </div>
</div>


<div class="ligne"></div>

<!-- Conteneur global pour tous les fichiers -->
<div class="conteneur-fichiers">
    <div class="fichiers">
        <img src="../images/pdf.png">
        <div class="contenu-droite">
            <h3>Titre 1</h3>
            <div class="boutons">
                <button class="bouton">Télécharger</button>
                <button class="bouton">Lecture</button>
            </div>
        </div>
    </div>

    <div class="fichiers">
        <img src="../images/pdf.png">
        <div class="contenu-droite">
            <h3>Titre 2</h3>
            <div class="boutons">
                <button class="bouton">Télécharger</button>
                <button class="bouton">Lecture</button>
            </div>
        </div>
    </div>

    <div class="fichiers">
        <img src="../images/pdf.png">
        <div class="contenu-droite">
            <h3>Titre 3</h3>
            <div class="boutons">
                <button class="bouton">Télécharger</button>
                <button class="bouton">Lecture</button>
            </div>
        </div>
    </div>

    <div class="fichiers">
        <img src="../images/pdf.png">
        <div class="contenu-droite">
            <h3>Titre 4</h3>
            <div class="boutons">
                <button class="bouton">Télécharger</button>
                <button class="bouton">Lecture</button>
            </div>
        </div>
    </div>

    <div class="fichiers">
        <img src="../images/pdf.png">
        <div class="contenu-droite">
            <h3>Titre 5</h3>
            <div class="boutons">
                <button class="bouton">Télécharger</button>
                <button class="bouton">Lecture</button>
            </div>
        </div>
    </div>

    <div class="fichiers">
        <img src="../images/pdf.png">
        <div class="contenu-droite">
            <h3>Titre 6</h3>
            <div class="boutons">
                <button class="bouton">Télécharger</button>
                <button class="bouton">Lecture</button>
            </div>
        </div>
    </div>

    <div class="fichiers">
        <img src="../images/pdf.png">
        <div class="contenu-droite">
            <h3>Titre 7</h3>
            <div class="boutons">
                <button class="bouton">Télécharger</button>
                <button class="bouton">Lecture</button>
            </div>
        </div>
    </div>

    <div class="fichiers">
        <img src="../images/pdf.png">
        <div class="contenu-droite">
            <h3>Titre 8</h3>
            <div class="boutons">
                <button class="bouton">Télécharger</button>
                <button class="bouton">Lecture</button>
            </div>
        </div>
    </div>

    <div class="fichiers">
        <img src="../images/pdf.png">
        <div class="contenu-droite">
            <h3>Titre 9</h3>
            <div class="boutons">
                <button class="bouton">Télécharger</button>
                <button class="bouton">Lecture</button>
            </div>
        </div>
    </div>

    <div class="fichiers">
                <img src="../images/pdf.png">
                <div class="contenu-droite">
                    <h3>Titre 10</h3>
                    <div class="boutons">
                        <button class="bouton">Télécharger</button>
                        <button class="bouton">Lecture</button>
                    </div>
                </div>
            </div>

            <div class="fichiers">
                <img src="../images/pdf.png">
                <div class="contenu-droite">
                    <h3>Titre 11</h3>
                    <div class="boutons">
                        <button class="bouton">Télécharger</button>
                        <button class="bouton">Lecture</button>
                    </div>
                </div>
            </div>

            <div class="fichiers">
                <img src="../images/pdf.png">
                <div class="contenu-droite">
                    <h3>Titre 12</h3>
                    <div class="boutons">
                        <button class="bouton">Télécharger</button>
                        <button class="bouton">Lecture</button>
                    </div>
                </div>
            </div>
        </div>

        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center mt-4">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Précédent</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Suivant</a>
                </li>
            </ul>
        </nav>

        <?php require_once '../squelette/footer.php'; ?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>
