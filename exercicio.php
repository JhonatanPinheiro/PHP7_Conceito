<!DOCTYPE html>
<html lang="en"><he
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <link rel="stylesheet" href="recursos/css/estilo.css">
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso de PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?="/PHP7-Conceito/{$_GET['dir']}/{$_GET['file']}.php"?> class="botao-sem-formatacao">Sem formatação </a>
        <a href="/PHP7-Conceito/" class="botao-voltar">Voltar</a>
    </nav>
    <div class="conteudo">
        <?php 
            // include($_GET['dir'] . "/" . $_GET['file'] . ".php" );
            include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php");
        ?>
    </div>

</body>
<footer class="rodape">
    Jhonatan Pinheiro &copy; <?= date('Y-M-D')  ?>
</footer>






</html>