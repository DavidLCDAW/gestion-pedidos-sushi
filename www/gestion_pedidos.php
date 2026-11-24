<?php
include_once("./auth.php");
include_once("./menu_controller.php");
require_login();

$title = "Gestión de pedidos";
$products = renderProductsByCategories();
include("./header.php");
?>
<main>
    <?php foreach($products as $product): ?>

    <?php endforeach ?>
</main>
<?php

include("./footer.php");
