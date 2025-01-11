<?php
session_start();

include("../php/config.php");

if (!isset($_SESSION["email"])) {
    echo "<h1>Accès interdit : Vous devez être connecté pour voir les résultats.</h1>";
    exit();
}

$id_utilisateur = $_SESSION["id"];
$stmt = $db->prepare("SELECT admin FROM identifiants WHERE id = :id_utilisateur");
$stmt->bindParam(':id_utilisateur', $id_utilisateur);
$stmt->execute();
$result = $stmt->fetch();

if (!$result || $result['admin'] != 1) {
    echo "<h1>Accès interdit : Vous devez être un administrateur pour voir les résultats.</h1>";
    exit();
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de l'Enquête</title>
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <style>
        .chart-container {
            margin: 20px;
        }
        svg {
            font-family: Arial, sans-serif;
        }
    </style>
    <link rel="stylesheet" href="resultat.css">
</head>
<body>
<header>
    <img src="../images/logo.png" alt="Logo La Croix Bleue" class="logo">
    <nav class="menu">
        <button class="menu-bouton"><a href="../PageAccueil/accueil.html">Accueil</a></button>
        <button class="menu-bouton"><a href="../PageActualites/actualites.html">Actualités</a></button>
        <button class="menu-bouton"><a href="../PageLiberateur/liberateur.html">Liberateur</a></button>
        <button class="menu-bouton"><a href="../PageInscription/connexion.php">Connexion</a></button>
        <button class="menu-bouton"><a href="../PageEnquete/enquete.php">Enquete</a></button>
        <button class="menu-bouton special"><a href="resultat.php">Resultats</a></button>
        <button class="menu-bouton">Nous soutenir</button>
    </nav>

    <div class="hamburger-menu" id="hamburger-menu" onclick="toggleMenu()">
        &#9776;
    </div>

    <div class="menu-hamburger" id="menu-hamburger">
        <button class="menu-bouton"><a href="../PageAccueil/accueil.html">Accueil</a></button>
        <button class="menu-bouton"><a href="../PageActualites/actualites.html">Actualités</a></button>
        <button class="menu-bouton"><a href="../PageLiberateur/liberateur.html">Liberateur</a></button>
        <button class="menu-bouton"><a href="../PageInscription/connexion.php">Connexion</a></button>
        <button class="menu-bouton"><a href="../PageEnquete/enquete.php">Enquete</a></button>
        <button class="menu-bouton special"><a href="resultat.php">Resultats</a></button>
        <button class="menu-bouton">Nous soutenir</button>
    </div>
</header>

<h1>Résultats de l'Enquête</h1>

<!-- Conteneurs pour les graphiques -->
<div id="region" class="container"></div>
<div id="lieuDeVie" class="container"></div>
<div id="activite" class="container"></div>
<div id="qualiteVie" class="container"></div>
<div id="soutien" class="container"></div>

<!-- Inclusion du fichier JavaScript -->
<script src="resultat.js"></script>
</body>
</html>
