<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Sessão Básica </div>
    <hr><br>
    <?php
    session_start();
    print_r($_SESSION);
    echo '<br>';

    if(!$_SESSION['nome']){
        $_SESSION['nome'] = 'Gabriel';
    }

    if(!$_SESSION['email']){
        $_SESSION['email'] = 'gabriel@gmail.com';
    }
   
    print_r($_SESSION);
    ?>

    <p>
        <a href="/sessao/basico_sessao_alterar.php">Alterar Sessão</a>
    </p>



    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>