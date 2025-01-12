<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="inscription.css">
    <title>Enregistrement</title>
</head>
<body>
    <?php require_once '../squelette/header.php'; ?>

    <div class="container-login">
        <div class="box form-box">

            <?php
                include("../php/config.php");
                if (isset($_POST["submit"])) {
                    $nom = $_POST["nom"];
                    $prenom = $_POST["prenom"];
                    $email = $_POST["email"];
                    $motdepasse = $_POST["motdepasse"];

                    $stmt = $db->prepare("SELECT COUNT(*) FROM identifiants WHERE email = :email");
                    $stmt->bindParam(':email', $email);
                    $stmt->execute();
                    $emailExiste = $stmt->fetchColumn();

                    if ($emailExiste > 0){
                        echo "<div class='message'>
                                <p>Cet adresse email est déjà utilisée, veuillez en saisir une autre</p>
                              </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn'>Retour</button>";
                    }
                    else{
                        $motdepasse_hache = password_hash($motdepasse, PASSWORD_DEFAULT);

                        $query = $db->prepare("INSERT INTO identifiants (email, motdepasse, nom, prenom) VALUES (?, ?, ?, ?)");
                        $query->execute([$email, $motdepasse_hache, $nom, $prenom]);

                        echo "<div class='message'>
                                <p>Enregistrement effectué !</p>
                              </div> <br>";
                        echo "<a href='connexion.php'><button class='btn'>S'identifier</button>";
                    }
                } else {

            ?>

            <header>S'inscrire</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="motdepasse">Mot de passe</label>
                    <input type="password" name="motdepasse" id="motdepasse" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="S'inscrire" required>
                </div>
                <div class="links">
                    Vous êtes un adhérent? <a href="connexion.php">Se connecter</a>
                </div>
            </form>
        </div>
    </div>

    <?php require_once '../squelette/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php } ?>

</body>
</html>