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
  <form>
    <div class="question">
      <h2>1/ Ou habitez-vous ?</h2>
      <label><input type="radio"> Auvergne-Rhône-Alpes</label>
      <label><input type="radio"> Bourgogne-Franche-Comté</label>
      <label><input type="radio"> Bretagne</label>
      <label><input type="radio"> Centre-Val de Loire</label>
      <label><input type="radio"> Corse</label>
      <label><input type="radio"> Grand Est</label>
      <label><input type="radio"> Hauts-de-France</label>
      <label><input type="radio"> Ile-de-France</label>
      <label><input type="radio"> Normandie</label>
      <label><input type="radio"> Nouvelle-Aquitaine</label>
      <label><input type="radio"> Occitanie</label>
      <label><input type="radio"> Pays de la Loire</label>
      <label><input type="radio"> Provence Alpes Côte d’Azur</label>
      <label><input type="radio"> Guadeloupe</label>
      <label><input type="radio"> Guyane</label>
      <label><input type="radio"> Martinique</label>
      <label><input type="radio"> Mayotte</label>
      <label><input type="radio"> la Réunion</label>
      <label><input type="radio"> Je vis à l'étranger</label>
    </div>



    <div class="question">
      <h2>2/Etes-vous en situation de handicap ?</h2>
      <label><input type="radio">Oui</label>
      <label><input type="radio">Non</label>
      <dd><h2>2/a Si oui votre logement correspond-il a une orientation CDAPH ?</h2>
      <label><input type="radio">Oui</label>
      <label><input type="radio">Non</label>
      <dd><h2>2/b Le lieu de vie correspond-il a votre choix ?</h2>
      <label><input type="radio">Oui</label>
      <label><input type="radio">Non</label>
    </div>



    <div class="question">
      <h2>3/ Quel est votre activité ?</h2>
      <label><input type="radio"> Scolarité en milieu ordinaire </label>
      <label><input type="radio"> Scolarité en dispositif spécialisé de l'Education National </label>
      <label><input type="radio"> Instruction en Famille </label>
      <label><input type="radio"> Scolarité dans un établissement médico-social (IME, IMPRO, ...) </label>
      <label><input type="radio"> Formation Professionnel </label>
      <label><input type="radio"> Etudes Supérieures </label>
      <label><input type="radio"> Activité Professionnel en milieu ordinaire </label>
      <label><input type="radio"> Activité Professionnel en milieu protégé (ESAT, Entreprise adaptée) </label>
      <label><input type="radio"> Sans aucune activité scolaire ou professionnel </label>
      <label><input type="radio"> Autre </label>
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
      <label><input type="radio"> Printemps</label>
      <label><input type="radio"> Été</label>
      <label><input type="radio"> Automne</label>
      <label><input type="radio"> Hiver</label>
    </div>

    <button type="submit">Envoyer</button>
  </form>
</div>
</body>
</html>
