<?php
include_once("./auth.php");
include_once("./menu_controller.php");
require_login();

$title = "Gestión de pedidos";
$products = renderProductsByCategories();
$categorias = [];
foreach($products as $product){
    if(!in_array($product["categoria"], $categorias)) {
        $categorias[] = $product["categoria"];
    }
}

include("./header.php");
?>

<main class="container py-4">
    <?php foreach ($categorias as $categoria): ?>
        <section class="mb-5">
            <!-- Título de la categoría -->
            <h2 class="mb-3 border-bottom pb-2">
                <?= htmlspecialchars($categoria) ?>
            </h2>
            <!-- Productos de la categoría -->
            <div class="row g-3">
                <?php foreach ($products as $product): ?>
                    <?php if ($categoria === $product["categoria"]): ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body d-flex flex-column gap-5">
                                    <h5 class="card-title">
                                        <?= htmlspecialchars($product["nombre"]) ?>
                                    </h5>
                                    <div>
                                        <img class="card-img object-fit-contain" width="100" height="200" src="./files/imagenes/<?= $product["imagen"] ?>" alt="sushi">
                                    </div>
                                    <div class="mt-auto d-flex flex-column gap-2">
                                        <div>
                                            <p><?= $product["precio"]?>€</p>
                                        </div>
                                        <form action="#" method="post" class="">
                                            <button class="btn btn-primary" type="button">Añadir</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endforeach; ?>
</main>
<?php

include("./footer.php");
