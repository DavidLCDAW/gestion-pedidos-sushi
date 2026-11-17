<?php
include_once("auth.php");
$errores = handle_login();
$title = $title ?? "sushi";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
    <header class="container-fluid align-items-center bg-dark">
        <div class="container">
            <div class="d-flex justify-content-between pt-3">
                <h1>
                    <a href="./index.php" class="text-decoration-none text-light">
                        <?= $title ?? "Sushi"; ?>
                    </a>
                </h1>
                <?php if(!isset($_SESSION["user"])): ?>
                    <form action="#" method="post" class="d-flex align-items-center justify-content-center gap-2" >
                        <input type="text" name="name" placeholder="Nombre" class="form-control-sm">
                        <input type="text" name="password" placeholder="Contraseña" class="form-control-sm">
                        <p class="text-danger"><?= $errores ?? "" ?></p>
                        <button type="submit" class="btn btn-outline-success">Entrar</button>
                    </form>
                <?php else: ?>
                    <div class="d-flex align-items-center gap-3">
                        <h4 class="text-light"> Hola <?= htmlspecialchars(ucfirst($_SESSION["user"]["name"])) ?></h4>
                        <form action="logout.php" method="post" class="d-flex align-items-center ">
                            <button type="submit" class="btn btn-danger" name="logout">Cerrar sesión</button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
            <nav class="navbar mt-3">
                <a class="text-decoration-none text-light nav-item" href="./index.php">Inicio</a>
                <a class="text-decoration-none text-light nav-item" href="./perfil.php">Perfil</a>
                <a class="text-decoration-none text-light nav-item" href="./gestion_pedidos.php">Gestión de pedidos</a>
                <a class="text-decoration-none text-light nav-item" href="./gestion_carta.php">Gestión de carta</a>
                <a class="text-decoration-none text-light nav-item" href="./mejores_clientes.php">Mejores clientes</a>
            </nav>
        </div>
    </header>
