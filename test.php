<?php
try {
    // Chemin vers le fichier SQLite
    $pdo = new PDO('sqlite:' . __DIR__ . '/database.sqlite');
    // Activer les erreurs PDO pour déboguer
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion à la base de données réussie.";
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

include 'db.php';

// Exemple d'insertion de données
$stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
$stmt->execute([
    ':username' => 'john_doe',
    ':password' => password_hash('secret', PASSWORD_BCRYPT)
]);

echo "Utilisateur ajouté.";