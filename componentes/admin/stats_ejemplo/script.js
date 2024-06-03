document.addEventListener("DOMContentLoaded", function() {
    // Mock data for daily sales
    const dailySalesData = {
        total: 100
    };

    // Display daily sales stats
    console.log("Daily sales data:", dailySalesData); // Punto de control
    const dailySalesDiv = document.getElementById("daily-sales");
    dailySalesDiv.innerHTML = `<p>Venta total del día: ${dailySalesData.total}</p>`;

    // Mock data for product sales
    const productSalesData = {
        hamburguesa: 30,
        pizza: 20,
        empanadas: 15,
        milanesa_napolitana: 10 // Nuevo producto agregado
    };

    // Calculate total product sales
    const totalProductSales = Object.values(productSalesData).reduce((acc, curr) => acc + curr, 0);

    // Display product stats
    const productStatsDiv = document.getElementById("product-stats");
    let prevAngle = 0;
    for (let product in productSalesData) {
        const percentage = (productSalesData[product] / totalProductSales) * 360;
        const span = document.createElement("span");
        span.style.transform = `rotate(${prevAngle}deg)`;
        span.style.clip = `rect(0px, 100px, 200px, 0px)`;
        prevAngle += percentage;
        const colorClass = getColorClass(product);
        span.classList.add(colorClass);
        productStatsDiv.appendChild(span);
    }
});

// Function to determine color class based on product
function getColorClass(product) {
    switch(product) {
        case "hamburguesa":
            return "red";
        case "pizza":
            return "yellow";
        case "empanadas":
            return "orange";
        case "milanesa_napolitana": // Agregado para el nuevo producto
            return "green";
        default:
            return "";
    }
}
