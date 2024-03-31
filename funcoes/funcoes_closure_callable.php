<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title">Funções - Closure e Callable </div>
    <hr><br>
    <?php
    $soma1 = function($a,$b){
        return $a + $b;
    };

    #is_callable — Verifica se um valor pode ser chamado como uma função a partir do escopo atual.
    echo $soma1(2,3) . '<br>';
    echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';
    
    // Retornou |NÃO| pois eu sobrescrevi o valor dessa variável que estava sendo uma função. Agora ela saiu de uma definição de uma função para um armazenamento de uma valor = 1.
    $soma1 = 1;
    echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

    echo '<hr>';

    function soma2($a,$b){
        return $a + $b;
    }
   
    # echo soma2(2,3) . '<br>';
    # echo (is_callable(soma2) ? 'Sim' : 'Não') . '<br>';
    
    var_dump($soma1);
    var_dump(soma2);

    echo '<hr>';

    function executar1($a,$b, $op, Callable $funcao1){
        $resultado = $funcao1($a,$b) ?? 'Nada';
        echo "$a $op $b = $resultado <br>";
    }

    // É um objeto do tipo Closure. Essa é uma classe especial do PHP que é utilizada para representar uma função anônima. Quando uma função anônima é criada, o seu tipo é Closure. Na prática, uma closure é uma função anônima.
    function executar2($a,$b, $op, Closure $funcao2){
        $resultado = $funcao2($a,$b) ?? 'Nada';
        echo "$a $op $b = $resultado <br>";
    }

    echo '<br>'; 
    executar1(10,10,'+',$soma1);
    executar2(3000,1000,'+',soma2);
    


    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>