// Datos de ejemplo
var ventasDiariasData = [30, 45, 60, 55, 70, 65, 80];
var ventasMensualesData = [800, 1200, 1500, 1800, 2000, 2500, 2800];
var ventasAnualesData = [10000, 12000, 15000, 18000, 20000, 25000, 28000];
var productosMasVendidosData = {
    "Producto A": 120,
    "Producto B": 100,
    "Producto C": 80,
    "Producto D": 70,
    "Producto E": 60
};

// Dibujar gráficos cuando la página se carga
document.addEventListener("DOMContentLoaded", function() {
    drawVentasDiariasChart();
    drawVentasMensualesChart();
    drawVentasAnualesChart();
    drawProductosMasVendidosChart();
});

// Funciones para dibujar gráficos
function drawVentasDiariasChart() {
    var ctx = document.getElementById('ventas-diarias-chart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'],
            datasets: [{
                label: 'Ventas Diarias',
                data: ventasDiariasData,
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

function drawVentasMensualesChart() {
    var ctx = document.getElementById('ventas-mensuales-chart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'],
            datasets: [{
                label: 'Ventas Mensuales',
                data: ventasMensualesData,
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

function drawVentasAnualesChart() {
    var ctx = document.getElementById('ventas-anuales-chart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['2021', '2022', '2023', '2024', '2025', '2026', '2027'],
            datasets: [{
                label: 'Ventas Anuales',
                data: ventasAnualesData,
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

function drawProductosMasVendidosChart() {
    var labels = Object.keys(productosMasVendidosData);
    var data = Object.values(productosMasVendidosData);

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