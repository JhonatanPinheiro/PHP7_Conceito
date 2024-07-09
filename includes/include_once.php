<div class="titulo">INCLUDE ONCE</div>
<?php
ini_set('display_errors', 1);

include('include_once_arquivo.php');

#require('include_once_arquivo0.php');

#$variavel = 'Variável Alterada';
echo "Variavel = '{$variavel} ' . <br>";

#include('include_once_arquivo.php'); # Quando usamos o include e colocamos a inclusão de um mesmo arquivo isso não é possível. Sendo assim a próprio funcao init_set irá emitir o warning(Atenção) / Erro!
echo "Variável = '{$variavel}'. <br>";
$variavel = 'Variavel Alterada';
echo "Variável  = '{$variavel}' . <br>";

# Esse include_once ele reconhe-se que o arquivo já é existente e não carrega novamente  (Ou eja já foi chamado/implementado 1 vez)
include_once('include_once_arquivo.php');

?>