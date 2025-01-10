<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de l'Enquête</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="resultatBis.css">
</head>
<body>
<h1>Résultats de l'Enquête</h1>

<!-- Graphique: Nombre d'habitants par région -->
<div class="chart-container">
    <h2>Nombre d'habitants par région</h2>
    <canvas id="regionChart"></canvas>
</div>

<!-- Graphique: Lieu de vie -->
<div class="chart-container">
    <h2>Répartition des lieux de vie</h2>
    <canvas id="lieuDeVieChart"></canvas>
</div>

<!-- Graphique: Activités -->
<div class="chart-container">
    <h2>Répartition des activités</h2>
    <canvas id="activiteChart"></canvas>
</div>

<!-- Graphique: Qualité de vie -->
<div class="chart-container">
    <h2>Répartition de la qualité de vie</h2>
    <canvas id="qualiteVieChart"></canvas>
</div>

<!-- Graphique: Besoins de soutien -->
<div class="chart-container">
    <h2>Répartition des besoins de soutien</h2>
    <canvas id="soutienChart"></canvas>
</div>

<script src="resultatBis.js"></script>
</body>
</html>