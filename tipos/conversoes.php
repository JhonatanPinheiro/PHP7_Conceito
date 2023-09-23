<div class="title">CONVERSÕES </div>
<hr><br>
<?php

# int para float 
echo '<br>';
var_dump(PHP_INT_MAX + 1);
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);

// FLOAT para INT 
echo '<p> Float para int </p>';
var_dump((int) 6.8); #Convertendo float para int 
echo '<br>';
var_dump(intval(2.99999)); #Convertendo float para int
echo '<br>';
var_dump((int) round(2.599999)); #Função de arredondamento tanto para cima como para baixo
echo '<br>'; 
var_dump((int) round(2.444)) . '<br>'; #Função de arredondamento  tanto para cima como para baixo
echo '<br>'; 

// Operações com string
echo '<p>Strings</p>';
var_dump(3 + "2"); // Ele irá fazer o cálculo. Meso o 2 sendo uma string . PHP ele consegue ter essa capacidade de converter
echo '<br>';
var_dump("3" . 2); // Nesse caso como usando . ele fará a concatenação 
echo '<br>';
var_dump( 1 . '5 cinco'); // Dessa forma monstrará o tipo (String) e fará a concatenação dos valor 1 e 5 cinco. Mostrando: string(8) "15cinco"

?>