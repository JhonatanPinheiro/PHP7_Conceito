<div class="title"> Operadores Lógicos 01 </div>
<hr><br> 
<?php

var_dump(true);
echo'<br>';

var_dump(!true); #negacao (F)  Irá trazer false
echo'<br>';

var_dump(!!true); #negacao da negacao (F-V) irá trazer true
echo'<br>';

var_dump(!!!true); #negacao da negacao da negacao (F,V,F) irá trazer false
echo'<br>';

echo'<hr>';

echo"<p>Tabela Verdade 'AND' (E) </p>";
var_dump(true && true); #true
var_dump(true && false); #false
var_dump(false && true); #false
var_dump(false && false); #false

echo"<p>Tabela Verdade 'AND' (E) </p>";
var_dump(true and true); #true
var_dump(true and false); #false
var_dump(false and true); #false
var_dump(false and false); #false


echo"<p>Tabela Verdade 'OR' (OU) </p>";
var_dump(true || true); #true
var_dump(true || false); #true
var_dump(false || true); #true
var_dump(false || false); #false

echo"<p>Tabela Verdade 'OR' (OU) </p>";
var_dump(true or true); #true
var_dump(true or false); #true
var_dump(false or true); #true
var_dump(false or false); #false


echo"<p>Tabela Verdade 'XOR' (OU exclusivo) </p>"; #Apenas um ou outro tem quer ser verdadeiro. Se for os dois nesse ou exclusivo volta false. Precisar ser (V xor F) ou (F xor V) para dar verdadeiro
var_dump(true xor true); #false
var_dump(true xor false); #true
var_dump(false xor true); #true
var_dump(false xor false); #false

?>
<style>
 
</style>