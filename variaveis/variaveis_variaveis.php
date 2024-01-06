<div class="title"> Variavéis Variavéis </div>
<hr><br 
<?php

$a = 'valorA';
$$a = 'valorAABC';

echo "$a {$$a}";

echo "<br> $a";
echo "<br> {$$a}";

#$$a  Explicando: ele está pegando o valor que está setado na variável $a e criando uma nova variavel com o nome do valor que está contido na varivel $a. Ou seja temos uma variável chamada $valorA 
echo "<br>$valorA";


echo '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!';

echo "{$epa} {$$epa} {$$$epa}";

echo '<br>';

$a = 'b';
$b = 'c';
$c = 'd';
$d = 'e';

echo "{$a} {$$a} {$$$a} {$$$$a}";

?>