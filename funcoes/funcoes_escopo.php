<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Funções e Escopo </div>
    <hr><br>
    <?php
    function imprimirMensagens(){
        echo 'Olá';
    }

    function imprimirNome(){
        echo ' Jhonatan Pinheiro';
    }

    function despedindo(){
        echo ' Até a proxima!';
    }

    #imprimirMensagens();
    #imprimirNome();
    #despedindo();

    $variavel = 1;

    function trocaValor(){
        $variavel = 2;
        echo "Durante a função: {$variavel} <br>";

    }

    echo "Antes: $variavel <br>";
    trocaValor();
    echo "Depois: {$variavel} <br>";

    echo '<hr>';

    function trocaValorDeVerdade(){
        global $variavel;
        $variavel = 3;
        echo "Durante a função: $variavel <br>";
    }

    echo "Antes: {$variavel} <br>";
    trocaValorDeVerdade();
    echo "Depois: $variavel <br>";

    echo '<hr>';
    var_dump(trocaValorDeVerdade());

    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>