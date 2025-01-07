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

<script>
    fetch('get_data.php')
        .then(response => response.json())
        .then(data => {
            // Histogrammes existants
            const regionCounts = d3.rollup(data, v => v.length, d => d.region);
            renderBarChart(regionCounts, '#chart-region', 'Nombre par région');

            const activiteCounts = d3.rollup(data, v => v.length, d => d.activite);
            renderBarChart(activiteCounts, '#chart-activite', 'Nombre par activité');

            // Ajout du graphique en camembert pour le soutien
            const soutienCounts = d3.rollup(data, v => v.length, d => d.soutien);
            renderPieChart(soutienCounts, '#chart-soutien', 'Répartition du soutien');
        });

    // Fonction pour créer un bar chart (existant)
    function renderBarChart(data, selector, title) {
        const margin = { top: 40, right: 30, bottom: 50, left: 60 };
        const width = 800 - margin.left - margin.right;
        const height = 500 - margin.top - margin.bottom;

        const svg = d3.select(selector)
            .append('svg')
            .attr('width', width + margin.left + margin.right)
            .attr('height', height + margin.top + margin.bottom)
            .append('g')
            .attr('transform', `translate(${margin.left},${margin.top})`);

        const x = d3.scaleBand()
            .domain(Array.from(data.keys()))
            .range([0, width])
            .padding(0.2);

        const y = d3.scaleLinear()
            .domain([0, d3.max(Array.from(data.values()))])
            .nice()
            .range([height, 0]);

        svg.selectAll('.bar')
            .data(data)
            .enter()
            .append('rect')
            .attr('class', 'bar')
            .attr('x', d => x(d[0]))
            .attr('y', d => y(d[1]))
            .attr('height', d => height - y(d[1]))
            .attr('width', x.bandwidth());

        svg.append('g')
            .attr('transform', `translate(0,${height})`)
            .call(d3.axisBottom(x));

        svg.append('g')
            .call(d3.axisLeft(y));

        svg.append('text')
            .attr('x', width / 2)
            .attr('y', -10)
            .attr('text-anchor', 'middle')
            .style('font-size', '20px')
            .text(title);
    }

    // Fonction pour créer un camembert
    function renderPieChart(data, selector, title) {
        const width = 500;
        const height = 500;
        const radius = Math.min(width, height) / 2;

        const svg = d3.select(selector)
            .append('svg')
            .attr('width', width)
            .attr('height', height)
            .append('g')
            .attr('transform', `translate(${width / 2}, ${height / 2})`);

        const color = d3.scaleOrdinal()
            .domain(Array.from(data.keys()))
            .range(['#4caf50', '#ff9800', '#f44336', '#03a9f4']);

        const pie = d3.pie()
            .value(d => d[1]);

        const arc = d3.arc()
            .innerRadius(0)
            .outerRadius(radius);

        const pieData = pie(Array.from(data.entries()));

        svg.selectAll('path')
            .data(pieData)
            .enter()
            .append('path')
            .attr('d', arc)
            .attr('fill', d => color(d.data[0]))
            .attr('stroke', '#fff')
            .style('stroke-width', '2px');

        // Ajouter des labels
        svg.selectAll('text')
            .data(pieData)
            .enter()
            .append('text')
            .text(d => `${d.data[0]} (${d.data[1]})`)
            .attr('transform', d => `translate(${arc.centroid(d)})`)
            .style('text-anchor', 'middle')
            .style('font-size', '14px');

        // Ajouter un titre
        svg.append('text')
            .attr('x', 0)
            .attr('y', -height / 2 + 20)
            .attr('text-anchor', 'middle')
            .style('font-size', '20px')
            .text(title);
    }
</script>
</body>

</html>
