<?php
session_start();

if($_COOKIE['usuario']){
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']){
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
</head>

<body>
    <header class="cabecalho">
        <h1>PHP7</h1>
        <h2>Indíce dos exercícios</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">
             Usuário: <?= $_SESSION['usuario'] ?> 
        </span>
        <a href="logount.php">SAIR</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php  
                require_once('menu.php');
            ?>
        </div>
    </main>
</body>
<footer class="rodape">
    Jhonatan Pinheiro &copy; <?= date('Y-M-D')  ?>
</footer>

</html>