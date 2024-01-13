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
echo "<div class='divisor'>_____________________________________</div>";
echo '<br>';

$idade = 65;
if($idade < 18){
    echo "Menor de idade = $idade<br>";
} else if($idade  < 65){
    echo "Adulto =$idade<br>";
}else {
    echo"Terceira idade = $idade <br>";
}


echo '<p> Spaceship</p>';
# É muito utilizado para fazer uma comparação/ordenação sobre números . Para saber se o números é maior ou menor entre outro numero.
#Como funciona: Quando o primeiro número (da esquerda: 5) ele é maior que o da direita (3).
# Numero da esquerda é maior que o da direira irá voltar o número  1. Pois é verdadeiro 
# Agora se o número da direita for maior que o da esquerda irá voltar -1 
# Caso eu coloque o dois numeros iguais esquerda e direita irá voltar 0
var_dump(5 <=> 3); #retorno = 1
echo '<br>';
var_dump(5 <=> 5); #retorno = 0
echo '<br>';
var_dump(5 <=> 40); #retorno = -1
echo '<br>';

echo '<p> Valores pode ser V ou F </p>'; #dupla negação abaixos
var_dump(!!5); 
echo '<br>';
var_dump(!!0);
echo '<br>';
var_dump(!!"");
echo '<br>';
var_dump(!!" ");
echo '<br>';

?>

<style>
    .divisor{
        margin-top: 4px;
        background-color: #FFF;
    }

</style>