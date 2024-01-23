<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div class="title"> Array </div>
    <hr><br>
    <?php
    $lista = array(1,2,3.4,"texto");
    echo $lista . '<br>';
    var_dump($lista);
    echo '<br>';
    echo $lista[0];
    echo '<br>';
    echo $lista[1];
    echo '<br>';
    echo $lista[2];
    echo '<br>';
    echo $lista[3];
    echo '<br>';
    echo $lista[4];
    echo '<br>';
    echo $lista[5];
    echo '<br>';
    echo $lista[15];
    echo '<br>';
    echo $lista[100];
    var_dump($lista[100]);

    echo '<br>';
    $texto = 'Jhonatan está estudando PHP';
    echo $texto[0];
    echo $texto[1];
    echo $texto[2];
    echo $texto[3];
    echo $texto[4];
    echo $texto[5];
    echo '<br>';
   
    // Essa função pega quantidade / posição de uma string . Pega a possição da palvra que começa + quantidade de caracter que vocÊ quer que pegue
    echo mb_substr($texto,0,4);




    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style>
    form>* {
        font-size: 1.8rem;
    }

    .mensage-warning {
        color: orangered;
    }

    .negrito{
        font-weight: 900;
        font-size: 28px;
    }
</style>