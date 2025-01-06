<?php
session_start();
include("../php/config.php");

if (!isset($_SESSION['email'])) {
    header('Location: ../PageInscription/connexion.php');
    exit();
}

$id_utilisateur = $_SESSION['email'];
$email_utilisateur = $_SESSION['email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $region = isset($_POST['region']) ? $_POST['region'] : NULL;
    $handicap = isset($_POST['handicap']) ? $_POST['handicap'] : NULL;
    $cdaph = isset($_POST['cdaph']) ? $_POST['cdaph'] : NULL;
    $soutien = isset($_POST['soutien']) ? $_POST['soutien'] : NULL;

    try {
        $stmt = $db->prepare("INSERT INTO resultats (id_utilisateur, email, departement, cdaph, soutien) 
                              VALUES (:id_utilisateur, :email, :region, :handicap, :cdaph, :soutien)");

        // Liaison des paramètres
        $stmt->bindParam(':id_utilisateur', $id_utilisateur);
        $stmt->bindParam(':email', $email_utilisateur);
        $stmt->bindParam(':region', $region);
        $stmt->bindParam(':handicap', $handicap);
        $stmt->bindParam(':cdaph', $cdaph);
        $stmt->bindParam(':soutien', $soutien);

        // Exécution de la requête
        $stmt->execute();

        // Redirection après succès
        header('Location: ../PageAccueil/merci.php');
        exit();

    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>
