<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Sessão Alterar </div>
    <hr><br>
    <?php
    session_start();
    print_r($_SESSION);
    ?>
    
    <?php
         $_SESSION['email'] = 'jhonatan_session2@gmail.com.br';
    ?>
    
    <p>
        <strong> Nome: </strong> <?php print_r($_SESSION['nome'])?>
        <br>
        <strong> Email: </strong> <?php print_r($_SESSION['email'])?>
    </p>

    <p>
        <a href="../sessao/basico_sessao.php"> Voltar </a>
    </p>

    <p>
        <a href="basico_sessao_limpar.php"> Limpar a Sessão </a>
    </p>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>