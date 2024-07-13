<?php namespace contexto;?>
<div class="titulo"> Exemplo Básico </div>

<?php
echo __NAMESPACE__. '<br>'; // Função do PHP que irá trazer qual o nome do namespace estamos usando (Se referenciando)
const CONSTANTE1 = 123; // 1 Maneira -: Definindo uma constante
define('contexto\CONSTANTE2', 1234); #2 Maneira -: Definindo uma constante dentor do namespace usando uma segunda maneira de declaração de constante em PHP 

define(__NAMESPACE__ . '\CONSTANTE3', 345); 

define('outro_contexto\CONSTANTE4', 157); #Criando uma constante em uma nova NAMESPACE  sendo ainda que ela nem foi criada ! 

echo CONSTANTE1 . '<br>';
echo CONSTANTE2 . '<br>';
echo \contexto\CONSTANTE3 . '<br>'; #Quando começa com barra estou fazendo o caminho absoluto  -> |1 Maneira|
echo constant(__NAMESPACE__.'\CONSTANTE3') . '<br>'; #Usando a função Constant para acessar esse variável constante -> |2 Maneira|

echo \outro_contexto\CONSTANTE4 . '<br>'; #Acessando essa CONSTANTE4  que está registrada em outro NAMESPACE

function soma($a,$b){
    return $a + $b;
}

echo  'Função Soma. Valores dos parâmetro passado: 1 e 2 valor da soma desse valores é: ';
echo  \contexto\soma(1,2) . '<br>';

function strpas($str,$text){
    echo "Buscando o texto '{$text}' em '{$str}' <br>";
    return 1;
}

echo '<br>';
echo strpas('Texto generico para busca!', 'busca' . '<br>');

echo '<br><br><hr>';
echo \strpas('Texto generico para busca!', 'busca' . '<br>');

?>