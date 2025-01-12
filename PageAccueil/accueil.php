<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ACCUEIL - La Croix Bleue</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="accueil.css">
</head>
<body>
    <?php require_once '../squelette/header.php'; ?>

<!-- DEBUT CARROUSEL -->

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-target="#carouselExampleCaptions" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-target="#carouselExampleCaptions" data-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-target="#carouselExampleCaptions" data-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/carrousel1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-left d-none d-md-block">
                    <h1>L'Alcool est notre Pire Ennemi, fuir serait Lâche !</h1>
            <p>Association loi 1901, reconnue d'utilité publique depuis 1922 se veut ouverte à TOUS sans distinction pour venir en aide aux personnes en difficulté</p>
                    <a href="#" class="btn"> Voir plus </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/carrousel2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-left d-none d-md-block">
                    <h1>L'Alcool est notre Pire Ennemi, fuir serait Lâche !</h1>
                <p>Association loi 1901, reconnue d'utilité publique depuis 1922 se veut ouverte à TOUS sans distinction pour venir en aide aux personnes en difficulté</p>
                    <a href="#" class="btn"> Voir plus </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/carrousel3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-left d-none d-md-block">
                    <h1>L'Alcool est notre Pire Ennemi, fuir serait Lâche !</h1>
                <p>Association loi 1901, reconnue d'utilité publique depuis 1922 se veut ouverte à TOUS sans distinction pour venir en aide aux personnes en difficulté</p>
                    <a href="#" class="btn"> Voir plus </a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>

    <!-- FIN CARROUSEL -->


    <div class="article-container">
        <h1>Dernières actualités</h1>
        <div class="article">
            <img src="../images/article1.jpg">
            <div class="article-content">
                <h3>LIBERATEUR N°33 ETE 2024</h3>
                <h5>26 juillet 2024</h5>
                <p>Les soins addictologie en ambulatoire regroupent un large panel de prises en charge, il fallait donc une deuxième partie pour
                    aborder l’ensemble de ces (...)</p>
                <a href="" class="btn">Lire l'article</a>
            </div>
        </div>

        <div class="article">
            <img src="../images/article2.png">
            <div class="article-content">
                <h3>Dossier de La Croix Bleue n°7</h3>
                <h5>9 juillet 2024</h5>
                <p>Le terme de pair-aidance est assez récent mais il repose sur un fonctionnement qui existe depuis de nombreuses années.
                    Les mouvements et associations d’entraide ont quasiment toujours utilisé l’expérience de ceux qui vivent ou ont vécu
                    la maladie pour aider ceux qui traversent les mêmes difficultés. (...)</p>
                <a href="" class="btn">Lire l'article</a>
            </div>
        </div>

        <div class="article">
            <img src="../images/article3.png">
            <div class="article-content">
                <h3>Pas d’alcool sur le chemin de l’école !</h3>
                <h5>7 juin 2024</h5>
                <p>Face à l’abondance de publicités pour l’alcool dans le métro francilien, notamment dans des stations proches
                    d’établissements scolaires, France Assos Santé, la Ligue contre le cancer, l’Unaf, la FNAS et l’association
                    Entraid’addict ont décidé de porter plainte contre la RATP. Entre la provocation à (...)</p>
                <a href="" class="btn">Lire l'article</a>
            </div>
        </div>
    </div>

    <div class="stats-container">
        <div class="stats">
            <h1>85,7%</h1>
            <div class="stats-text">
                <p>des jeunes de 17 ans ont déjà expérimenté l’alcool.</p>
            </div>
        </div>
        <div class="stats">
            <h1>24%</h1>
            <div class="stats-text">
                <p>des personnes âgées de 18 à 75 ans dépassent les seuils de consommation à faible risque.</p>
            </div>
        </div>
    </div>

    <?php require_once '../squelette/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
