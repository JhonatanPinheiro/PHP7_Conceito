<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if($_POST['email']){
    $usuarios = [
        [
            "nome" => "Aluno Cod3r",
            "email" => "aluno@cod3r.com.br",
            "senha" => "123456"
        ],

        [
            "nome" => "Tester",
            "email" => "teste@cod3r.com.br",
            "senha" => "teste@123"
        ],

        [
            "nome" => "admin",
            "email" => "admin@cod3r.com.br",
            "senha" => "admin@123"
        ],
    ];


    foreach($usuarios as $usuario){
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if($emailValido && $senhaValida){
            $_SESSION['erros'] = NULL;

            $_SESSION['usuario'] = $usuario['nome'];
            header('Location: index.php');

        }
    }

    if(!$_SESSION['usuario']){
        $_SESSION['erros'] = ['Usuário/Senha inválido!'];
    }


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
    <link rel="stylesheet" href="recursos/css/login.css">
</head>

<body>
    <header class="cabecalho">
        <h1>PHP7</h1>
        <h2>Seja bem vindo ! </h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <?php  
                if($_SESSION['erros']): ?>
                    <div class="erros">
                            <?php foreach($_SESSION['erros'] as $erro): ?>
                                <p><?= $erro ?></p> 
                            <?php endforeach ?>
                    </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email"> E-mail </label>
                    <input type="email" name="email" id="email">
                </div>    
                <div>
                     <label for="senha">Senha</label>
                     <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
</body>
<footer class="rodape">
    Jhonatan Pinheiro &copy; <?= date('Y-M-D')  ?>
</footer>
</html>