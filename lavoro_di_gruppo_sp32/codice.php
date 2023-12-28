<header> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</header>
<head>
    <h1 align="center" style="color:red">DATI RACCOLTI</h1>
</head>
<body background="https://previews.123rf.com/images/oksancia/oksancia1212/oksancia121200096/16710238-ambientale-pattern-di-sfondo-senza-soluzione-di-continuit%C3%A0.jpg">
    <canvas id="lineChart" width="200" height="100"></canvas>
    <?php
        foreach($_GET as $k => $v)
        {
            $dati = [$k];
        } 
    ?>
    <script>
        var ctx = document.getElementById('lineChart').getContext('2d');
        var lineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Label 1', 'Label 2', 'Label 3', 'Label 4', 'Label 5'],
                datasets: [{
                    label: 'My Line Chart',
                    data: <?php echo json_encode($dati); ?>,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>