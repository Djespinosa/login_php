<?php 
session_start();
if (!isset($_SESSION['user'])) {
    header("location: /index.php");
    exit();
}

include "classes/UserConnection.php";

$userDb = new UserConnection();
$conn = $userDb->getConnection();

// Consulta los productos con sus cantidades
$sql = "SELECT SKU, SUM(Cantidad) as total FROM Recoleccion_de_Datos GROUP BY SKU";
$result = $conn->query($sql);

$labels = [];
$data = [];

while ($row = $result->fetch_assoc()) {
    $labels[] = $row['SKU'];
    $data[] = $row['total'];
}

// Convertir datos a JSON para Chart.js
$labels_json = json_encode($labels);
$data_json = json_encode($data);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inicio </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark static-top" style="background: #f7f7f7;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="public/careppsas_cover.jpg" alt="..." height="36">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a style="color:#1E5675" class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['user']; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/server/login/logout.php">Salir del sistema</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>
<!-- Agregar Canvas para el gráfico -->
<div class="container mt-5">
    <h3 class="text-center">Cantidad de Productos Disponibles</h3>
    <canvas id="productChart" width="200" height="70"></canvas>
</div>

<!-- Script de Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var ctx = document.getElementById('productChart').getContext('2d');

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo $labels_json; ?>,
            datasets: [{
                label: 'Cantidad de Productos',
                data: <?php echo $data_json; ?>,
                backgroundColor: 'rgba(30, 86, 117, 0.6)',
                borderColor: 'rgba(30, 86, 117, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
</script>

</html>