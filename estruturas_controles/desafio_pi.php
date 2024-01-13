<div class="title"> Desafio de PI </div>
<hr><br> 
<?php

$valor_pi_correto = pi();
$valor_pi_usuario = 3.1415926535898;

echo "$valor_pi_correto";
echo '<br>';

echo "{$valor_pi_correto} ";

if($valor_pi_usuario >= 3.141 && $valor_pi_usuario <= 3.1415926535898){
    echo"<p class='correct'>It's correct!</p>";
}else{
    echo "<p class='wrong'>It's not correct!</p>";
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