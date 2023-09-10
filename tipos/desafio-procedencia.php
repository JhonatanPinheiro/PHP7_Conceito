<div class="title">ORDEM DE PROCEDENCIA </div>
<hr><br>
<?php 
echo '<p>1. Qual o valor será impresso</p>';
#echo 2 + 5 * 3 + (12/6) / (-8 + 2 ** 3);
#Resolvendo  Resposta: infinito
#echo ( (2 + (5 * 3)) + ((12 / 6) / (-8 + (2 ** 3))) );

echo '<p>2. Qual expressão imprime o valor 100?</p>';

echo 'a)', (1 + 2) * 20 - 15, '<br>';
echo 'Resolução:', (((1 + 2) * 20) - 15), '<br><br>';

echo '<span resposta-correta>b)', 4 * 5 ** 2 , '</span><br>';
echo '<span resolucao>Resolução:',  (4 * (5 ** 2)) , '</span><br><br>';

echo 'c)', 2 ** 3 ** 4 / 1e25 , '<br>';
echo 'Resolução:', ((2 ** (3 ** 4)) / 1e25) , '<br><br>';

echo 'd)', 3 + (3 * 8) / 2 - 3, '<br>';
echo 'Resolução:', (3 + ((3 * 8) / 2) - 3) , '<br><br>';

?>

<style>
    [resposta-correta]{
        color: blue;
        font-weight: bold;
    }

    [resolucao]{
        color: orange;
        font-weight: default;
    }
</style>