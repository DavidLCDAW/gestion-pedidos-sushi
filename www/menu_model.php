<?php

function readMenu() {
    $file = fopen("./files/menu.csv", "r+l");
    $datos = [];
    while(($lineas = fgetcsv($file, separator: "\t", escape: "\\")) !== false){
        $datos[] = $lineas;
    }
    fclose($file);
    return $datos;
}

/**
 * Filtrar por categoría
 * Si no se especifica devuelve todos
 * @param category
 * @return filtered categorías filtradas
 */
function getProductsByCategories($category = null) {
    $products = readMenu();
    $filtered = [];
    foreach ($products as $product) {
        if($category === null || $product[0] === $category){
            $filtered[] = [
            "categoria" => $product[0],
            "nombre" => $product[1],
            "precio" => $product[2],
            "imagen" => $product[3],
            ];
        }
    }
    return $filtered;
}
