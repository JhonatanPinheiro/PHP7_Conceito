<div class="title"> Desafio de PI </div>
<hr><br> 
<?php
 
 #Acertando apenas 4 primeiros numeros do pi já irá dar como correto , idependente se colocar depois numeros equivocados pois está na tonerância

$valor_pi_correto = pi();
$valor_pi_usuario = 3.1415;

echo "$valor_pi_correto";
echo '<br>';

if($valor_pi_usuario >= 3.141 && $valor_pi_usuario <= 3.1415926535898){
    echo"<p class='correct'>It's correct!</p> <br>";
    echo"Você informou: {$valor_pi_usuario} <br>";
    echo"Valor de PI é: {$valor_pi_correto} <br>";
}else{
    echo "<p class='wrong'>It's not correct!</p>";
    echo"Você informou: {$valor_pi_usuario} <br>";
    echo"Valor de PI é: {$valor_pi_correto} <br>";
}

?>
<style>
    .correct{
        color: green;
    }
    .wrong{
        color: red;
    }
</style>