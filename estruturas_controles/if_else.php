<div class="title"> IF/ELSE #01 </div>
<hr><br>
<?php

$nota1 = 10;
$nota2 = 9;
$nota3 = 10;
$nota4 = 9;
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
$nomeAluno = 'Jhonatan Pinheiro';

if ($nomeAluno != '' || $nomeAluno != NULL) {
    if ($media >= 7 && $media < 8) {
        echo 'Você passou!';
    } elseif ($media >= 8 && $media <= 9.0) {
        echo 'Você passou parabéns!';
    } elseif ($media > 9  && $media <= 10.00) {
        echo 'Você passou, parabéns. Passa na secretaria para pegar seu mérito!';
    } else {
        echo 'Você não passou, não desista! Estude mais e tento novamente ano que vem';
    }
}else{
    echo 'Infome seu nome para proseguirmos!';
}
?>