<div class="title"> Valor Vs Referencia </div>
<hr><br>
<?php
#Fazendo atribuição por Valor
echo "<br>---- Valor ---<br>";
$a = 'Ana';
$b = 'jhonatan';
$c = 'Layara';

$e = $b;
$f = $c;

echo "<br>";
echo "{$a} {$b} {$c} ";

echo "<br>";
echo "{$e} {$f}";


$a = 'Mudei';
echo "<br>";
echo "{$a}";
echo "<br>";

#Fazendo atribuição por Referencia
echo "<br>---- Referencia ---<br>";
$variavel = 'Valor inicial';
echo "$variavel";

$variavelReferencia = &$variavel;
echo "<br>$variavelReferencia";
$variavelReferencia = 'mesma referencia';
echo "<br>$variavelReferencia $variavel";
echo '<br>';

$variavelReferencia = 'eu mudeiiii';

echo "<br>{$variavelReferencia} {$variavel}";
?>