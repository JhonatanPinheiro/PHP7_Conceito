<div class="title">Variáveis Básicos </div>
<hr><br>
<?php
$numeroA = 13;

echo $numeroA . '<br>';
var_dump($numeroA);
echo '<br>';

$a = 3;
$b = 16;
$soma = $a + $b;

echo $soma . '<br>';

echo isset($soma); // Essa é uma função no php para verificar se essa variável está sendo já usada. Ele devolve de forma boleana 1 como True e vazio/nada/0 como False
echo isset($somaNaoExistente); // Essa é uma função no php para verificar se essa variável está sendo já usada. Ele devolve de forma boleana vazio/nada/0 como False
echo '<br>';







?>