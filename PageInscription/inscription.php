<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="inscription.css">
    <title>Enregistrement</title>
</head>
<body>
    <header>
        <img src="../images/logo.png" alt="Logo La Croix Bleue" class="logo">
        <nav class="menu">
            <button class="menu-bouton"><a href="../PageAccueil/accueil.php">Accueil</a></button>
            <button class="menu-bouton"><a href="../PageActualites/actualites.html">Actualités</a></button>
            <button class="menu-bouton"><a href="../PageLiberateur/liberateur.html">Liberateur</a></button>
            <button class="menu-bouton special"><a href="oldInscription.html">Inscription</a></button>
            <button class="menu-bouton">Notre activité</button>
            <button class="menu-bouton">Nous soutenir</button>
        </nav>

        <div class="hamburger-menu" id="hamburger-menu" onclick="toggleMenu()">
            &#9776;
        </div>

        <div class="menu-hamburger" id="menu-hamburger">
            <button class="menu-bouton"><a href="../PageAccueil/accueil.php">Accueil</a></button>
            <button class="menu-bouton"><a href="../PageActualites/actualites.html">Actualités</a></button>
            <button class="menu-bouton"><a href="../PageLiberateur/liberateur.html">Liberateur</a></button>
            <button class="menu-bouton special"><a href="oldInscription.html">Inscription</a></button>
            <button class="menu-bouton">Notre activité</button>
            <button class="menu-bouton">Nous soutenir</button>
        </div>
    </header>

    <div class="container">
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

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <img src="../images/footer1.png" alt="footer-logo1">
                    <ul>
                        <li>189 rue Belliard 75018 Paris</li>
                        <li>Tel : 01.42.28.37.37</li>
                        <li>cbleuesiege@gmail.com</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <img src="../images/footer2.png" alt="footer-logo1">
                    <ul>
                        <li><a href="#">Association</a></li>
                        <li><a href="#">Accueil Siège</a></li>
                        <li><a href="#">Conseil Administration</a></li>
                        <li><a href="#">Historique</a></li>
                        <li><a href="#">Les objectifs</a></li>
                        <li><a href="#">Liens Utiles</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <img src="../images/footer3.png" alt="footer-logo1">
                    <ul>
                        <li><a href="#">Annuaire</a></li>
                        <li><a href="#">Centres & Campin</a></li>
                        <li><a href="#">Documents</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Mentions légales</a></li>
                        <li><a href="#">Crédit</a></li>
                        <li><a href="#">Flux RSS</a></li>
                        <li><a href="#">Espace membre</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <img src="../images/footer4.png" alt="footer-logo1">
                    <h4>Newsletter</h4>
                    <form>
                        <i class="fa-regular fa-envelope"></i>
                        <input type="email" placeholder="Entrer votre addresse Email">
                        <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p class="copyright-text">© 2005-2024 La Croix Bleue</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php } ?>

</body>
</html>