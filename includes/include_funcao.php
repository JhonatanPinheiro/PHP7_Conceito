<div class="titulo"> Include Função </div>
<?php

echo 'Carregando : INCLUDE_FUNCAO';

function carregarArquivo(){
    include('include_arquivo.php');

    echo $variavel . '<br>';
    echo soma(2,5) . '!<br>';
}

echo '<br>Novamente no arquivo include_funcao <br>';

#echo soma(1,8). '!<br>';
carregarArquivo();

echo "Variavel  = '{$variavel}' . ";
var_dump($variavel);
?>