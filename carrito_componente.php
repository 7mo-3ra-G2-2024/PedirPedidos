<div id="carrito">
    <h2>Carrito de Compras</h2>
    <ul id="lista-carrito">
        <?php if(isset($_SESSION['carrito'])): ?>
            <?php foreach($_SESSION['carrito'] as $id => $item): ?>
                <li>
                    <span><?php echo $item['producto']; ?> - $<?php echo $item['precio']; ?> - Cantidad: <?php echo $item['cantidad']; ?></span>
                    <a href="?eliminar=<?php echo $id; ?>">Eliminar</a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No hay productos en el carrito.</li>
        <?php endif; ?>
    </ul>
    <p>Total: $<?php echo calcularTotalCarrito(); ?></p>
    <form action="realizar_pedido.php" method="post">
        <button type="submit" name="realizar_pedido">Realizar Pedido</button>
    </form>
</div>
