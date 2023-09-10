<div class="title">Operações Aritméticas </div>
<hr><br>
<?php

echo 1 + 1, '<br>',
var_dump(1 + 1.0);
echo '<br>';
echo 1 + 2.6, '<br>';
echo 10 - 2, '<br>';
echo 2 * 2, '<br>';
echo 7 / 2, '<br>';
echo (7 / (2 * 2)), '<br>';
echo intdiv(10,3), '<br>'; #Função para dividir. 10 dividido  por 3. Como o resultado é um número decimal ele irá truncar as casas demais deixando apenas o valor antes da vírgula
echo round(11/3), '<br>'; # Função ela está divindo e fazendo o arrendondamento 
echo 7 % 4, '<br>'; # Operador para pegar o resto da divisão
#echo 7 / 0, '<br>' ; 
#echo intdiv(7,0);
echo 4 ** 2, '<br>'; # Operador para fazer eleveção. 4²

##Precendência de operadores (Ordem de preferencia dos operadores)
# 1 -> () 
# 2 -> ** 
# 3 -> / OU *
# 4 -> % 
# 5 ->  + OU -
?>