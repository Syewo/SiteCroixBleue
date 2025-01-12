<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="inscription.css">
    <title>Connexion</title>
</head>
<body>
<?php require_once '../squelette/header.php'; ?>
  <div class="container">
    <div class="box form-box">
        <?php
            include("../php/config.php");
            if(isset($_POST["submit"])){
                $email = $_POST["email"];
                $motdepasse = $_POST["motdepasse"];

                $stmt = $db->prepare("SELECT * FROM identifiants WHERE email = :email");
                $stmt->bindParam(':email', $email);
                $stmt->execute();
                $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($utilisateur && password_verify($motdepasse, $utilisateur['motdepasse'])) {
                    $_SESSION['id'] = $utilisateur['id'];
                    $_SESSION['nom'] = $utilisateur['nom'];
                    $_SESSION['prenom'] = $utilisateur['prenom'];
                    $_SESSION['email'] = $utilisateur['email'];
                    header('Location: ../PageAccueil/accueil.php');
                    exit();
                } else {
                    echo "<div class='message'>
                           <p>Email ou Mot de passe invalide</p>
                         </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Retour</button>";
                }
                }else {
        ?>
        <header>Connexion</header>
      <form action="" method="post">
        <div class="field input">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" required>
        </div>

        <div class="field input">
          <label for="motdepasse">Mot de passe</label>
          <input type="password" name="motdepasse" id="motdepasse" required>
        </div>

        <div class="field">
          <input type="submit" class="btn" name="submit" value="Connexion" required>
        </div>
        <div class="links">
          Vous n'avez pas de compte? <a href="inscription.php">S'inscrire</a>
        </div>
      </form>
    </div>
  </div>
<?php require_once '../squelette/footer.php'; ?>
<?php } ?>
</body>
</html>