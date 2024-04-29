<?php
session_start();

function agregarProductoAlCarrito($producto, $precio, $cantidad) {
    $item = array(
        'producto' => $producto,
        'precio' => $precio,
        'cantidad' => $cantidad
    );

    $_SESSION['carrito'][] = $item;
}

function eliminarProductoDelCarrito($id) {
    unset($_SESSION['carrito'][$id]);
}

function vaciarCarrito() {
    unset($_SESSION['carrito']);
}

function calcularTotalCarrito() {
    $total = 0;

    if(isset($_SESSION['carrito'])) {
        foreach($_SESSION['carrito'] as $item) {
            $total += $item['precio'] * $item['cantidad'];
        }
    }

    return $total;
}
?>
