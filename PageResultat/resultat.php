<?php
session_start();

include("../php/config.php");

if (!isset($_SESSION["email"])) {
    header('Location: ../PageInscription/connexion.php');
    exit();
}

$id_utilisateur = $_SESSION["id"];
$stmt = $db->prepare("SELECT admin FROM identifiants WHERE id = :id_utilisateur");
$stmt->bindParam(':id_utilisateur', $id_utilisateur);
$stmt->execute();
$result = $stmt->fetch();
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
<?php require_once '../squelette/header.php';
    if (!$result || $result['admin'] != 1) {
        echo "<div class='container-message'>";
        echo "<div class='message'>
            <p>Accès interdit : Vous devez être un administrateur pour voir les résultats.</p>
          </div> <br>";
        echo "<a href='../PageAccueil/accueil.php'><button class='btn'>Retour à l'accueil</button></a>";
        echo "</div>";
        exit();
    }
    else {
?>
<h1>Résultats de l'Enquête</h1>

<!-- Conteneurs pour les graphiques -->
<div class="container-graph">
    <div id="region"></div>
</div>
<div class="container-graph">
    <div id="lieuDeVie"></div>
</div>
<div class="container-graph">
    <div id="activite"></div>
</div>
<div class="container-graph">
    <div id="qualiteVie"></div>
</div>
<div class="container-graph">
    <div id="soutien"></div>
</div>

<!-- Inclusion du fichier JavaScript -->
<script src="resultat.js"></script>
</body>
</html>
        <?php require_once '../squelette/footer.php';
    }
    ?>