<div class="title"> Desafio 01 - Equação </div>
<hr><br>
<?php

$equacao1 = ((6*(3 + 2))** 2);
$denominador1 = 3 * 2; 

$equacao2 = (1 - 5) * (2 - 7);
$denominador2 = 2;


$superiorA  = $equacao1 / $denominador1;
$superiorB = ($equacao2 / $denominador2) ** 2;

$superiorC = ($superiorA - $superiorB) ** 3;
$denominado_final = 10 ** 3;

$resultado_equacao = ($superiorC / $denominado_final);

echo  '<br> Resultado da equação: ' . '<span resultado>' . $resultado_equacao . '</span>' ;

?>

<style>
    [resultado]{
        color: blue;
        font-size: 25px;
        font-weight: 900;
    }
</style>