<?php
// Inclure le header
include '../squelette/header.html';
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats du Formulaire</title>
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <style>
        .chart {
            margin: 20px auto;
            width: 800px;
            height: 500px;
        }
        .bar {
            fill: steelblue;
        }
        .bar:hover {
            fill: orange;
        }
        .axis-label {
            font-size: 14px;
        }
    </style>
</head>
<body>
<h1>Visualisation des Résultats</h1>
<div id="chart-region" class="chart"></div>
<div id="chart-activite" class="chart"></div>
<div id="chart-soutien" class="chart"></div>

<script src="resultat.js"></script>
</body>

</html>
