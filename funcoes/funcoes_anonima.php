<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title">Função Anônima </div>
    <hr><br>
    <?php

    //função anônima 
    $soma = function ($a, $b) {
        return $a + $b;
    };

    echo $soma(1, 2, '<br>');
    echo '<hr>';

    function executar($a, $b, $op, $funcao)
    {
        $resultado = $funcao($a, $b) ?? NULL;

        echo "$a $op $b = $resultado<br>";
    }

    executar(2, 3, '+', $soma);

    echo '<hr>';

    //função anônima 
    $multiplicacao = function ($a, $b) {
        return $a * $b;
    };

    executar(2, 3, '*', $multiplicacao);

    echo '<hr>';

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>