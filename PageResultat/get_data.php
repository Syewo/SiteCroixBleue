<?php
include("../php/config.php");

header('Content-Type: application/json');

try {
    $stmt = $db->query("SELECT region, handicap, cdaph, lieu_de_vie, activite, qualite_vie, soutien FROM resultats");
    $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($resultats);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}