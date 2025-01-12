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
    <link rel="stylesheet" href="resultat.css">
</head>
<body>
<?php require_once '../squelette/header.php'; ?>

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
