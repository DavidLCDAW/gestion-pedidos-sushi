<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?? "Sushi"?></title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
    <div>
        <h1>
            <a href="./index.php">
                <?= $title ?? "Sushi"; ?>
            </a>
        </h1>
        <form action="#" method="post">
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="password" placeholder="Contraseña">
            <button type="button">Entrar</button>
        </form>
    </div>
    <nav>
        <a href="./index.php">Inicio</a>
        <a href="./perfil.php">Perfil</a>
        <a href="./gestion_pedidos.php">Gestión de pedidos</a>
        <a href="./gestion_carta.php">Gestión de carta</a>
        <a href="./mejores_clientes.php">Mejores clientes</a>
    </nav>
    </header>
