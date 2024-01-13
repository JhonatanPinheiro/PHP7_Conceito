<div class="title"> Operadores Relacionais </div>
<hr><br> 
<?php

var_dump(1 == 1);
echo '<br>';
var_dump(1 > 1);
echo '<br>';
var_dump(1 < 1);
echo '<br>';
var_dump(1 != 1);
echo '<br>';
var_dump(1 !== 1);
echo '<br>';
var_dump(1 >= 1);
echo '<br>';
var_dump(1 <= 1);
echo '<br>';
var_dump(1 <= 1);
echo '<br>';
echo var_dump(1 === 1);
echo '<br>';
echo var_dump(!false);
echo '<br>';
echo var_dump(!true);
echo '<br>';
echo '_____________________________________';
echo '<br>';

$idade = 65;
if($idade < 18){
    echo "Menor de idade = $idade<br>";
} else if($idade  < 65){
    echo "Adulto =$idade<br>";
}else {
    echo"Terceira idade = $idade <br>";
}

?>