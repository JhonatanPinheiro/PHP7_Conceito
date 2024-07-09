<div class="titulo">Require & Return</div>
<?php
$valorRetorno = require('return_usado.php');

echo "$valorRetorno <br>";
echo "$variavelRetornada<br>";

echo __DIR__ . 'br'; #Informe onde está o arquivo. Ou seja o caminho absoluto

#Posso fazer da seguinte forma acessar a variável utlizando o caminha absoluto
$valorRetorno2 = require(__DIR__ . '/return_nao_usado.php'); #Pode usar o require
#$valorRetorno2 = include(__DIR__ . '/return_nao_usado.php');#Também posso usar o include

echo '<br>';
echo $valorRetorno2; #Pois ele irá volta 1 se o arquivo return_nao_usado existir caso contrário será retornado 0 (As vezes não voltará nada então deve-se colocar um var_dump para visualização do false)que seria falso!
?>