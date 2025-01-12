<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="soutenir.css" />
    <title>Soutenir</title>
</head>
<body>
<?php require_once '../squelette/header.php';?>
<section class="donation">
    <div class="donation-conteneur">
        <div class="donation-contenue">
            <div class="donation-info">
                <h2 class="donation-titre">Faire un don à LA CROIX BLEUE</h2>
                <p class="donation-description">
                    La CROIX BLEUE est RECONNUE D’UTILITE PUBLIQUE
                    Elle peut, à ce titre, recevoir des dons et des legs
                    Si vous désirez soutenir notre action, utilisez le formulaire de contact pour décrire votre souhait.
                </p>
            </div>
            <div class="donation-actions">
                <form class="donation-form">
                    <div class="saisie">
                        <h4 class="saisie-titre">Je donne</h4>
                        <div class="saisie-action">
                            <label class="label" for="par-mois">
                                <span class="label-titre">par mois</span>
                                <input
                                    type="radio"
                                    name="select-timing"
                                    id="par-mois"
                                    checked
                                />
                            </label>
                            <label class="label" for="une-fois">
                                <span class="label-titre">Une fois</span>
                                <input type="radio" name="selection-frequence" id="une-fois"/>
                            </label>
                        </div>
                    </div>
                    <div class="saisie">
                        <h4 class="saisie-titre">Sélectionnez un montant</h4>
                        <div class="saisie-action">
                            <label class="label" for="10€">
                                <span class="label-titre">10€</span>
                                <input type="radio" name="selection-montant" id="10€"/>
                            </label>
                            <label class="label" for="20€">
                                <span class="label-titre">20€</span>
                                <input type="radio" name="selection-montant" id="20€"/>
                            </label>
                            <label class="label" for="30€">
                                <span class="label-titre">$30</span>
                                <input type="radio" name="selection-montant" id="30€" checked />
                            </label>
                            <label class="label" for="40€">
                                <span class="label-titre">40€</span>
                                <input type="radio" name="selection-montant" id="40€"/>
                            </label>
                            <label class="label" for="autre">
                                <span class="label-titre">autre</span>
                                <input type="radio" name="selection-montant" id="autre"/>
                            </label>
                        </div>
                    </div>
                    <div class="saisie">
                        <label for="donation-ajouter" class="label">
                  <span class="label-titre">
                    J'accepte les Conditions Générales d’Utilisation du service et j'ai lu la charte de confidentialité . *
                  </span>
                            <input type="checkbox" name="donation-montant" id="donation-ajouter"/>
                        </label>
                    </div>
                    <div class="saisie">
                        <h4 class="saisie-titre">name</h4>
                        <input type="text" name="name" placeholder="Entrez votre nom" />
                        <a href="#" class="link-share">
                            Cliquez ici pour faire un don en l'honneur d'une autre personne
                        </a>
                    </div>
                    <div class="saisie">
                        <input type="submit" value="Payer" class="btn" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php require_once '../squelette/footer.php';?>
</body>
</html>