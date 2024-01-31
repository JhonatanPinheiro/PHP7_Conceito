<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div class="title"> Desafio do Soteio </div>
    <hr><br>
    <?php
    $nome = ["Elza","Raphaela", "Maria", "Eliara", "Layara", "Nayara", "Jhonatan"];

    print_r($nome);
    echo '<br>';
    echo '<br>';
    print_r(array_rand($nome));

    #Pegando o indice do array de forma aleátorio e armazenando em uma variável
    $indiceArray = array_rand(($nome)); 
    #Imprimindo na tela o elemento de um array de forma aletória
    echo '<br>';
    print_r($nome[$indiceArray]);
    echo "<br>";
    echo "<h1><center>$nome[$indiceArray]</center></h1>";


    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style>

</style>