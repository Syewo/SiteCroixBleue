<?php
    session_start();

    include("../php/config.php");
    if(!isset($_SESSION["email"])){
        header("location: ../PageInscription/connexion.php");
        exit();
    }

    $id_utilisateur = $_SESSION["id"];

    $stmt = $db->prepare("SELECT * FROM resultats WHERE id = :id_utilisateur");
    $stmt->bindParam(':id_utilisateur', $id_utilisateur);
    $stmt->execute();
    $result = $stmt->fetch();
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
<?php require_once '../squelette/header.php'; ?>
<div class="container-questions">
    <?php
    if ($result) {
        echo "<div class='message'>
            <p>Vous avez déjà répondu à ce questionnaire. Merci pour votre participation.</p>
          </div> <br>";
        echo "<a href='../PageAccueil/accueil.php'><button class='btn'>Retour à l'accueil</button></a>";
        exit();
    }
    else {
    ?>
  <h1>Questionnaire</h1>
  <form method="POST" action="../PageResultat/traitement.php">
    <div class="question">
      <h2>1/ Ou habitez-vous ?</h2>
      <label><input type="radio" name="region" value="Auvergne-Rhône-Alpes"> Auvergne-Rhône-Alpes</label>
      <label><input type="radio" name="region" value="Bourgogne-Franche-Comté"> Bourgogne-Franche-Comté</label>
      <label><input type="radio" name="region" value="Bretagne"> Bretagne</label>
      <label><input type="radio" name="region" value="Centre-Val de Loire"> Centre-Val de Loire</label>
      <label><input type="radio" name="region" value="Corse"> Corse</label>
      <label><input type="radio" name="region" value="Grand Est"> Grand Est</label>
      <label><input type="radio" name="region" value="Hauts-de-France"> Hauts-de-France</label>
      <label><input type="radio" name="region" value="Ile-de-France"> Ile-de-France</label>
      <label><input type="radio" name="region" value="Normandie"> Normandie</label>
      <label><input type="radio" name="region" value="Nouvelle-Aquitaine"> Nouvelle-Aquitaine</label>
      <label><input type="radio" name="region" value="Occitanie"> Occitanie</label>
      <label><input type="radio" name="region" value="Pays de la Loire"> Pays de la Loire</label>
      <label><input type="radio" name="region" value="Provence Alpes Côte d’Azur"> Provence Alpes Côte d’Azur</label>
      <label><input type="radio" name="region" value="Guadeloupe"> Guadeloupe</label>
      <label><input type="radio" name="region" value="Guyane"> Guyane</label>
      <label><input type="radio" name="region" value="Martinique"> Martinique</label>
      <label><input type="radio" name="region" value="Mayotte"> Mayotte</label>
      <label><input type="radio" name="region" value="Réunion"> Réunion</label>
      <label><input type="radio" name="region" value="Autre"> Je vis à l'étranger</label>
    </div>


    <div class="question">
      <h2>2/Buvez-vous régulièriement de l'alcool ?</h2>
      <label><input type="radio" name="handicap" value="Oui">Oui</label>
      <label><input type="radio" name="handicap" value="Non">Non</label>
      <div class="sousquestion"><h2>2/a Si oui essayez vous activement d'arreter de boire ?</h2></div>
      <label><input type="radio" name="cdaph" value="Oui" class="sousquestionbtn">Oui</label>
      <label><input type="radio" name="cdaph" value="Non" class="sousquestionbtn">Non !!</label>
      <div class="sousquestion"><h2>2/b L'alcoolisme a-il des conséquences sur votre quotidien ?</h2></div>
      <label><input type="radio" name="lieu_vie" value="Oui" class="sousquestionbtn">Oui</label>
      <label><input type="radio" name="lieu_vie" value="Non" class="sousquestionbtn">Non !</label>
    </div>


      <div class="question">
          <h2>3/ Quels types de problèmes vous sont causés par l'alcool ?</h2>
          <label><input type="checkbox" name="qualite_vie[]" value="Tout va bien"> Tout va bien !!! </label>
          <label><input type="checkbox" name="qualite_vie[]" value="Restriction sociale"> Restriction de la vie sociale </label>
          <label><input type="checkbox" name="qualite_vie[]" value="Souffrance psychologique"> Souffrance psychologique </label>
          <label><input type="checkbox" name="qualite_vie[]" value="Fatigue"> Fatigue, épuisement </label>
          <label><input type="checkbox" name="qualite_vie[]" value="Réstriction professionnelle"> Réduction de la vie professionnelle </label>
          <label><input type="checkbox" name="qualite_vie[]" value="Coûts financiers"> Coûts financiers importants </label>
          <label><input type="checkbox" name="qualite_vie[]" value="Impact négatif sur la fratrie"> Impact négatif sur la fratrie </label>
          <label><input type="checkbox" name="qualite_vie[]" value="Conflics familiaux"> Conflics familiaux </label>
          <label><input type="checkbox" name="qualite_vie[]" value="Maladie ou difficulté pour ..."> Difficulté pour réaliser des projets personnels </label>
          <label><input type="checkbox" name="qualite_vie[]" value="Eloignement de la personne"> Isolement </label>
      </div>



    <div class="question">
      <h2>4/ Quel est votre activité scolaire ou professionelle ??</h2>
      <label><input type="radio" name="activite" value="Scolarité ordinaire"> Scolarité en milieu ordinaire </label>
      <label><input type="radio" name="activite" value="Dispositif spécialisé"> Scolarité en dispositif spécialisé de l'Education National </label>
      <label><input type="radio" name="activite" value="Instruction en Famille"> Instruction en Famille </label>
      <label><input type="radio" name="activite" value="Etablissement médico-social"> Scolarité dans un établissement médico-social (IME, IMPRO, ...) </label>
      <label><input type="radio" name="activite" value="Formation professionnelle"> Formation Professionnel </label>
      <label><input type="radio" name="activite" value="Etudes Supérieures"> Etudes Supérieures </label>
      <label><input type="radio" name="activite" value="Activité Professionnel ordinaire"> Activité Professionnelle en milieu ordinaire </label>
      <label><input type="radio" name="activite" value="Milieu protégé"> Activité Professionnel en milieu protégé (ESAT, Entreprise adaptée) </label>
      <label><input type="radio" name="activite" value="Sans activité"> Sans aucune activité scolaire ou professionnelle </label>
      <label><input type="radio" name="activite" value="Autre"> Autre </label>
    </div>




    <div class="question">
      <h2>5/ Avez-vous besoin de soutien ?</h2>
      <label><input type="radio" name="soutien" value="Autonome"> Je suis totalement autonome !</label>
      <label><input type="radio" name="soutien" value="Soutien partiel"> Un soutien à l'autonomie pour le logement, l'accès à la santé, les loisirs, les démarches administratives</label>
          <label><input type="radio" name="soutien" value="Aide totale"> Une aide pour tous les actes de la vie quotidienne et la précence d'une tierce personne 24 heures sur 24</label>
      <label><input type="radio" name="soutien" value="Intervention quotidienne"> Des interventions et stimulations ponctuelles mais quotidiennes (toilette, sorties, repas, communication..)</label>
    </div>

    <button type="submit" id="boutonsubmit">Envoyer</button>
  </form>
</div>
    <?php }
        require_once '../squelette/footer.php';
    ?>
</body>
</html>
