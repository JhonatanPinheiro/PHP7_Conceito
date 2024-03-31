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

    



    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>