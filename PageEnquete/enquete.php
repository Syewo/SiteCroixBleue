<?php
    session_start();

    include("../php/config.php");
    if(!isset($_SESSION["email"])){
        header("location: ../PageInscription/connexion.php");
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questionnaire</title>
  <link rel="stylesheet" href="enquete.css">
</head>
<body>
<div class="container">
  <h1>Questionnaire</h1>
  <form method="POST" action="../PageResultat/traitement.php">
    <div class="question">
      <h2>1/ Ou habitez-vous ?</h2>
      <label><input type="radio" name="region"> Auvergne-Rhône-Alpes</label>
      <label><input type="radio" name="region"> Bourgogne-Franche-Comté</label>
      <label><input type="radio" name="region"> Bretagne</label>
      <label><input type="radio" name="region"> Centre-Val de Loire</label>
      <label><input type="radio" name="region"> Corse</label>
      <label><input type="radio" name="region"> Grand Est</label>
      <label><input type="radio" name="region"> Hauts-de-France</label>
      <label><input type="radio" name="region"> Ile-de-France</label>
      <label><input type="radio" name="region"> Normandie</label>
      <label><input type="radio" name="region"> Nouvelle-Aquitaine</label>
      <label><input type="radio" name="region"> Occitanie</label>
      <label><input type="radio" name="region"> Pays de la Loire</label>
      <label><input type="radio" name="region"> Provence Alpes Côte d’Azur</label>
      <label><input type="radio" name="region"> Guadeloupe</label>
      <label><input type="radio" name="region"> Guyane</label>
      <label><input type="radio" name="region"> Martinique</label>
      <label><input type="radio" name="region"> Mayotte</label>
      <label><input type="radio" name="region"> la Réunion</label>
      <label><input type="radio" name="region"> Je vis à l'étranger</label>
    </div>


    <div class="question">
      <h2>2/Etes-vous en situation de handicap ?</h2>
      <label><input type="radio" name="handicap">Oui</label>
      <label><input type="radio" name="handicap">Non</label>
      <div><h2>2/a Si oui votre logement correspond-il a une orientation CDAPH ?</h2></div>
      <label><input type="radio" name="cdaph">Oui</label>
      <label><input type="radio" name="cdaph">Non</label>
      <div><h2>2/b Le lieu de vie correspond-il a votre choix ?</h2></div>
      <label><input type="radio" name="lieu_vie">Oui</label>
      <label><input type="radio" name="lieu_vie">Non</label>
    </div>



    <div class="question">
      <h2>3/ Quel est votre activité ?</h2>
      <label><input type="radio" name="activite"> Scolarité en milieu ordinaire </label>
      <label><input type="radio" name="activite"> Scolarité en dispositif spécialisé de l'Education National </label>
      <label><input type="radio" name="activite"> Instruction en Famille </label>
      <label><input type="radio" name="activite"> Scolarité dans un établissement médico-social (IME, IMPRO, ...) </label>
      <label><input type="radio" name="activite"> Formation Professionnel </label>
      <label><input type="radio" name="activite"> Etudes Supérieures </label>
      <label><input type="radio" name="activite"> Activité Professionnel en milieu ordinaire </label>
      <label><input type="radio" name="activite"> Activité Professionnel en milieu protégé (ESAT, Entreprise adaptée) </label>
      <label><input type="radio" name="activite"> Sans aucune activité scolaire ou professionnel </label>
      <label><input type="radio" name="activite"> Autre </label>
    </div>



    <div class="question">
      <h2>4/ Quel est votre qualité de vie ?</h2>
      <label><input type="checkbox"> Tout va bien </label>
      <label><input type="checkbox"> Restriction de la vie sociale </label>
      <label><input type="checkbox"> Souffrance psychologique </label>
      <label><input type="checkbox"> Fatigue, épuisement </label>
      <label><input type="checkbox"> Réduction de la vie professionnelle </label>
      <label><input type="checkbox"> Coûts financiers importants </label>
      <label><input type="checkbox"> Impact négatif sur la fratrie </label>
      <label><input type="checkbox"> Conflics familiaux </label>
      <label><input type="checkbox"> Maladie ou difficulté pour ... </label>
      <label><input type="checkbox"> Eloignement de la personne </label>
    </div>



    <div class="question">
      <h2>5/ Avez-vous besoin de soutien ?</h2>
      <label><input type="radio" name="soutien"> Je suis totalement autonome</label>
      <label><input type="radio" name="soutien"> Un soutien à l'autonomie pour le logement, l'accès à la santé, les loisirs, les démarches administratives</label>
      <label><input type="radio" name="soutien"> Une aide pour tous les actes de la vie quotidienne et la précence d'une tierce personne 24 heures sur 24</label>
      <label><input type="radio" name="soutien"> Des interventions et stimulations ponctuelles mais quotidiennes (toilette, sorties, repas, communication..)</label>
    </div>

    <button type="submit">Envoyer</button>
  </form>
</div>
</body>
</html>
