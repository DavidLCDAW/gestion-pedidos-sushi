<?php

function addProducts() {
    $productos_pedidos = $_POST["productos_pedidos"] ?? [];
    $productos = getProductsByCategories();
    $a = [];
    // print_r($productos_pedidos);
    foreach($productos as $key => $producto) {
        $a = $producto["id"];
        print_r($a);
    }
    // return $id;
}
