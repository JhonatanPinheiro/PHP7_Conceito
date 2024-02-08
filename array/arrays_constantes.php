<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div class="title"> Arrays Constantes </div>
    <hr><br>
    <?php

    const FRUTAS_CITRICAS = array('Laranja', 'Abacaxi');
    const FRUTAS_DOCES = ['Melancia','Morango'];

    #FRUTAS_DOCES[0] = 'banana'; -- Não permite eu alterar um valor em um array constantes

    const CARROS = ["fiat" => "Uno", "Ford" => "Fiesta"];
    echo '<br> '. CARROS["fiat"];

    define('CIDADES',  array('Belo Horizonte', 'Recife'));
    echo '<br>'.CIDADES[1];
    echo '<br>';
    // CIDADES[0] = 'Rio de Janeira';
    // echo '<br>' . CIDADES[1];
    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style>

</style>