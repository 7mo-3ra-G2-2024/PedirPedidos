<?php

function agregarAlCarrito($producto, $precio, $cantidad) {
    $item = array(
        'producto' => $producto,
        'precio' => $precio,
        'cantidad' => $cantidad
    );

    
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

   
    $_SESSION['carrito'][] = $item;
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
