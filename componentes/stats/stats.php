<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Stats</title>
<!-- Agregar estilos CSS -->
<link rel="stylesheet" href="styles.css">
<!-- Agregar biblioteca Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="container">
    <h1>Estadísticas de Ventas</h1>
    <div class="chart-container">
        <canvas id="ventas-diarias-chart"></canvas>
    </div>
    <div class="chart-container">
        <canvas id="ventas-mensuales-chart"></canvas>
    </div>
    <div class="chart-container">
        <canvas id="ventas-anuales-chart"></canvas>
    </div>
    <div class="chart-container">
        <canvas id="productos-mas-vendidos-chart"></canvas>
    </div>
</div>

<!-- Script PHP para obtener datos de la base de datos y pasarlos a JavaScript -->
<?php
require "conexion.php";

// Consultas SQL para obtener los datos de ventas
$query_ventas_diarias = "SELECT fecha, SUM(cantidad) AS cantidad_vendida FROM ventas GROUP BY fecha";
$resultado_ventas_diarias = $conexion->query($query_ventas_diarias);

$query_ventas_mensuales = "SELECT DATE_FORMAT(fecha, '%Y-%m') AS mes, SUM(cantidad) AS cantidad_vendida FROM ventas GROUP BY mes";
$resultado_ventas_mensuales = $conexion->query($query_ventas_mensuales);

$query_ventas_anuales = "SELECT YEAR(fecha) AS año, SUM(cantidad) AS cantidad_vendida FROM ventas GROUP BY año";
$resultado_ventas_anuales = $conexion->query($query_ventas_anuales);

$query_mas_vendidos = "SELECT producto, SUM(cantidad) AS cantidad_vendida FROM ventas GROUP BY producto ORDER BY cantidad_vendida DESC LIMIT 10";
$resultado_mas_vendidos = $conexion->query($query_mas_vendidos);

$conexion->close();
?>

<script>
// Datos para los gráficos
var ventasDiariasData = <?php echo json_encode($resultado_ventas_diarias->fetch_all(MYSQLI_ASSOC)); ?>;
var ventasMensualesData = <?php echo json_encode($resultado_ventas_mensuales->fetch_all(MYSQLI_ASSOC)); ?>;
var ventasAnualesData = <?php echo json_encode($resultado_ventas_anuales->fetch_all(MYSQLI_ASSOC)); ?>;
var productosMasVendidosData = <?php echo json_encode($resultado_mas_vendidos->fetch_all(MYSQLI_ASSOC)); ?>;

// Función para dibujar el gráfico de ventas diarias
function drawVentasDiariasChart() {
    var labels = ventasDiariasData.map(function(item) {
        return item.fecha;
    });
    var data = ventasDiariasData.map(function(item) {
        return item.cantidad_vendida;
    });

    var ctx = document.getElementById('ventas-diarias-chart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Ventas Diarias',
                data: data,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
}

// Función para dibujar el gráfico de ventas mensuales
function drawVentasMensualesChart() {
    var labels = ventasMensualesData.map(function(item) {
        return item.mes;
    });
    var data = ventasMensualesData.map(function(item) {
        return item.cantidad_vendida;
    });

    var ctx = document.getElementById('ventas-mensuales-chart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Ventas Mensuales',
                data: data,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    stacked: true
                },
                y: {
                    stacked: true
                }
            }
        }
    });
}

// Función para dibujar el gráfico de ventas anuales
function drawVentasAnualesChart() {
    var labels = ventasAnualesData.map(function(item) {
        return item.año;
    });
    var data = ventasAnualesData.map(function(item) {
        return item.cantidad_vendida;
    });

    var ctx = document.getElementById('ventas-anuales-chart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Ventas Anuales',
                data: data,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
}

// Función para dibujar el gráfico de productos más vendidos
function drawProductosMasVendidosChart() {
    var labels = productosMasVendidosData.map(function(item) {
        return item.producto;
    });
    var data = productosMasVendidosData.map(function(item) {
        return item.cantidad_vendida;
    });

    var ctx = document.getElementById('productos-mas-vendidos-chart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Productos más vendidos',
                data: data,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
}

// Dibujar los gráficos cuando la página se cargue
window.onload =
