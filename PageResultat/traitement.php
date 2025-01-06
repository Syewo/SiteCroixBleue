<?php
session_start();
include("../php/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $region = isset($_POST['region']) ? $_POST['region'] : NULL;
        $handicap = isset($_POST['handicap']) ? $_POST['handicap'] : NULL;
        $cdaph = isset($_POST['cdaph']) ? $_POST['cdaph'] : NULL;
        $lieu_de_vie = isset($_POST['lieu_vie']) ? $_POST['lieu_vie'] : NULL;
        $activite = isset($_POST['activite']) ? $_POST['activite'] : NULL;
        $qualite_vie = isset($_POST['qualite_vie']) ? implode(", ", $_POST['qualite_vie']) : NULL;
        $soutien = isset($_POST['soutien']) ? $_POST['soutien'] : NULL;

        $stmt = $db->prepare("INSERT INTO résultats (departement, handicap, cdaph, lieu_de_vie, activite, qualite_vie, soutien) 
                              VALUES (:region, :handicap, :cdaph, :lieu_de_vie, :activite, :qualite_vie, :soutien)");

        $stmt->bindParam(':region', $region);
        $stmt->bindParam(':handicap', $handicap);
        $stmt->bindParam(':cdaph', $cdaph);
        $stmt->bindParam(':lieu_de_vie', $lieu_de_vie);
        $stmt->bindParam(':activite', $activite);
        $stmt->bindParam(':qualite_vie', $qualite_vie);
        $stmt->bindParam(':soutien', $soutien);

        $stmt->execute();

        header("Location: ../PageInscription/success.php");
        exit();
    } catch (PDOException $e) {
        echo "Erreur lors de l'enregistrement : " . $e->getMessage();
    }
} else {
    echo "Méthode non autorisée.";
}
?>
