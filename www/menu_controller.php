<?php
include_once("./menu_model.php");

function renderProductsByCategories() {
    $products = getProductsByCategories();
    return $products;
}
