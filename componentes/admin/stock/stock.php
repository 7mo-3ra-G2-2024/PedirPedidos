<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control de Stock</title>
    <link rel="stylesheet" href="../../../css/estilos-admin.css"> <!-- Estilos CSS -->
</head>
<body>
    <div class="stock-container">
        <h2 class="stock-title">Panel de Control de Stock</h2>
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'mostrar_stock.php'; ?> <!-- Mostrar datos del stock -->
            </tbody>
        </table>
    </div>
</body>
</html>

