// Récupération des données depuis l'API PHP
fetch('get_data.php')
    .then(response => response.json())
    .then(data => {
        const regions = {};
        const lieuDeVie = {};
        const activites = {};
        const qualiteVie = {};
        const soutien = {};

        data.forEach(entry => {
            // Comptage par région
            regions[entry.region] = (regions[entry.region] || 0) + 1;

            // Comptage par lieu de vie
            lieuDeVie[entry.lieu_de_vie] = (lieuDeVie[entry.lieu_de_vie] || 0) + 1;

            // Comptage par activité
            activites[entry.activite] = (activites[entry.activite] || 0) + 1;

            // Comptage par qualité de vie
            entry.qualite_vie.split(',').forEach(choice => {
                const trimmedChoice = choice.trim(); // Supprime les espaces inutiles
                qualiteVie[trimmedChoice] = (qualiteVie[trimmedChoice] || 0) + 1;
            });

            // Comptage par soutien
            soutien[entry.soutien] = (soutien[entry.soutien] || 0) + 1;
        });

        // Fonction pour créer des graphiques
        function createChart(ctx, labels, data, type, title) {
            new Chart(ctx, {
                type: type,
                data: {
                    labels: labels,
                    datasets: [{
                        label: title,
                        data: data,
                        backgroundColor: [
                            '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: title
                        }
                    },
                    layout: {
                        padding: {
                            top: 20,
                            bottom: 20
                        }
                    }
                }
            });
        }

        // Création des graphiques
        createChart(
            document.getElementById('regionChart').getContext('2d'),
            Object.keys(regions),
            Object.values(regions),
            'bar',
            "Nombre d'habitants par région"
        );

        createChart(
            document.getElementById('lieuDeVieChart').getContext('2d'),
            Object.keys(lieuDeVie),
            Object.values(lieuDeVie),
            'pie',
            "Répartition des lieux de vie"
        );

        createChart(
            document.getElementById('activiteChart').getContext('2d'),
            Object.keys(activites),
            Object.values(activites),
            'bar',
            "Répartition des activités"
        );

        createChart(
            document.getElementById('qualiteVieChart').getContext('2d'),
            Object.keys(qualiteVie),
            Object.values(qualiteVie),
            'bar',
            "Répartition de la qualité de vie"
        );

        createChart(
            document.getElementById('soutienChart').getContext('2d'),
            Object.keys(soutien),
            Object.values(soutien),
            'pie',
            "Répartition des besoins de soutien"
        );
    })
    .catch(error => console.error('Erreur lors de la récupération des données :', error));