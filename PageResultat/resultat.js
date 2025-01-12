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

        // Fonction pour créer un graphique en barres avec D3.js
        function createBarChart(selector, data, title) {
            const margin = { top: 40, right: 20, bottom: 100, left: 50 };
            const width = 600 - margin.left - margin.right;
            const height = 400 - margin.top - margin.bottom;

            const svg = d3.select(selector)
                .append('h2').text(title)
                .append('svg')
                .attr('width', width + margin.left + margin.right)
                .attr('height', height + margin.top + margin.bottom)
                .append('g')
                .attr('transform', `translate(${margin.left},${margin.top})`);

            const x = d3.scaleBand()
                .domain(Object.keys(data))
                .range([0, width])
                .padding(0.1);

            const y = d3.scaleLinear()
                .domain([0, d3.max(Object.values(data))])
                .nice()
                .range([height, 0]);

            svg.append('g')
                .selectAll('rect')
                .data(Object.entries(data))
                .enter()
                .append('rect')
                .attr('x', d => x(d[0]))
                .attr('y', d => y(d[1]))
                .attr('width', x.bandwidth())
                .attr('height', d => height - y(d[1]))
                .attr('fill', '#69b3a2')
                .on('mouseover', function () {
                    d3.select(this).attr('fill', '#ff7f0e'); // Change la couleur au survol
                })
                .on('mouseout', function () {
                    d3.select(this).attr('fill', '#69b3a2'); // Restaure la couleur d'origine
                });

            svg.append('g')
                .attr('transform', `translate(0,${height})`)
                .call(d3.axisBottom(x))
                .selectAll('text')
                .attr('transform', 'rotate(-40)')
                .style('text-anchor', 'end');

            svg.append('g')
                .call(d3.axisLeft(y));

            // Ajouter la légende sous les barres
            svg.selectAll('text.value')
                .data(Object.entries(data))
                .enter()
                .append('text')
                .attr('x', d => x(d[0]) + x.bandwidth() / 2)
                .attr('y', d => y(d[1]) - 5)
                .attr('text-anchor', 'middle')
                .attr('class', 'value')
                .text(d => d[1]);
        }


        function createPieChart(selector, data, title) {
            const width = 400;
            const height = 400;
            const radius = Math.min(width, height) / 2;

            const svg = d3.select(selector)
                .append('h2').text(title)
                .append('svg')
                .attr('width', width)
                .attr('height', height)
                .append('g')
                .attr('transform', `translate(${width / 2}, ${height / 2})`);

            const color = d3.scaleOrdinal(d3.schemeCategory10);

            const pie = d3.pie()
                .value(d => d[1]);

            const dataReady = pie(Object.entries(data));

            const arc = d3.arc()
                .innerRadius(0)
                .outerRadius(radius);

            svg.selectAll('path')
                .data(dataReady)
                .enter()
                .append('path')
                .attr('d', arc)
                .attr('fill', d => color(d.data[0]))
                .attr('stroke', 'white')
                .style('stroke-width', '2px')
                .on('mouseover', function () {
                    d3.select(this)
                        .transition()
                        .duration(200)
                        .attr('transform', 'scale(1.1)'); // Agrandit légèrement le segment
                })
                .on('mouseout', function () {
                    d3.select(this)
                        .transition()
                        .duration(200)
                        .attr('transform', 'scale(1)'); // Restaure la taille d'origine
                });

            // Légende sous le graphique en secteurs
            const legend = d3.select(selector)
                .append('ul')
                .style('list-style-type', 'none')
                .style('padding', 0)
                .style('margin-top', '10px');

            Object.entries(data).forEach(([key, value]) => {
                legend.append('li')
                    .text(`${key}: ${value} personnes`)
                    .style('font-size', '14px');
            });
        }



        // Création des graphiques
        createBarChart('#region', regions, 'Répartition par région');
        createPieChart('#lieuDeVie', lieuDeVie, 'Répartition par lieu de vie');
        createBarChart('#activite', activites, 'Répartition par activité');
        createBarChart('#qualiteVie', qualiteVie, 'Répartition par qualité de vie');
        createPieChart('#soutien', soutien, 'Répartition par soutien');
    })
    .catch(error => console.error('Erreur lors de la récupération des données :', error));
