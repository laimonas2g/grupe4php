<?php
function generuotiRaides() {
    $letters = ['a', 'b', 'c', 'd', 'e', 'f'];
    $random_letters = [];
    for ($i = 0; $i < 100; $i++) {
        $random_letters[] = $letters[rand(0, 5)];
    }
    $counts = array_count_values($random_letters);
    foreach ($letters as $letter) {
        if (!isset($counts[$letter])) {
            $counts[$letter] = 0;
        }
    }
    ksort($counts);

    return [
        "letters" => $letters,
        "random_letters" => $random_letters,
        "counts" => $counts,
        "labels" => array_keys($counts),
        "data" => array_values($counts),
    ];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["newLetters"])) {
    $data = generuotiRaides();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diagramos</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 800px; margin: 40px auto; }
        h2 { margin-top: 30px; }
        .list { font-size: 1.1em; background: #f9f9f9; padding: 10px; border-radius: 6px; min-height: 60px;}
        canvas { margin: 40px 0 0 0; }
        .btn { margin: 26px 0 10px 0; padding: 8px 16px; font-size: 1.08em; border-radius: 6px; border: 1px solid #36a2eb; background: #e8f4fd; cursor: pointer;}
        .charts { display: flex; gap: 40px; justify-content: center; flex-wrap: wrap; }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="container">
    <h1>Diagramos</h1>
    <form method="post">
        <button class="btn" type="submit" name="newLetters" value="1">Sugeneruoti naujas raides</button>
    </form>
    <h2>Bendras sąrašas</h2>
    <div class="list" id="lettersList">
        <?php
        foreach ($data["random_letters"] as $i => $letter) {
            echo $letter;
            if (($i + 1) % 20 === 0) echo "<br>";
            else echo " ";
        }
        ?>
    </div>

    <div class="charts">
        <div>
            <canvas id="pieChart" width="320" height="260"></canvas>
        </div>
    </div>
</div>
<script>
    let labels = <?php echo json_encode($data["labels"]); ?>;
    let chartData = <?php echo json_encode($data["data"]); ?>;
    let colors = [
        "#ff6384", "#36a2eb", "#ffce56", "#8ad96a", "#781e9bff", "#f39c12"
    ];

    const pieCtx = document.getElementById('pieChart').getContext('2d');
    let pieChart;

    function renderPieChart(labels, data) {
        if (pieChart) pieChart.destroy();
        pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: data,
                    backgroundColor: colors,
                }]
            },
            options: {
                plugins: {
                    legend: { position: 'bottom' }
                }
            }
        });
    }

    renderPieChart(labels, chartData);
</script>
</body>
</html>