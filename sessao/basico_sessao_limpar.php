<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Limpando uma Sessão </div>
    <hr><br>
    <?php
    session_start();
    session_destroy();
    header('Location: basico_sessao.php');

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>