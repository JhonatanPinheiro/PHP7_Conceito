<div class="titulo"> Include Require </div>
<?php
ini_set('display_errors',1); #Essa função ela mostrará todos os erros e advertências

echo 'Usando Include com arquivo inexistente...<br>';
include('arquivo_inexistente.php');
echo '<hr>';

echo 'Usando o Require com o arquivo inexistente... <br>';
require('arquivo_inexistente.php');
echo 'Não achou mesmo...<br>';

/*

Em PHP, require e include são duas formas de incluir arquivos externos em um script PHP, mas com diferenças importantes:

Comportamento em Erros:

require: É mais rigoroso. Se o arquivo especificado pelo require não puder ser incluído (por exemplo, se o arquivo não existir ou houver um erro de permissão), o PHP interromperá a execução do script e emitirá um erro fatal.
include: É mais tolerante. Se o arquivo especificado pelo include não puder ser incluído, o PHP emitirá um aviso (warning), mas a execução do script continuará.
Uso Recomendado:

require: É mais apropriado quando você precisa que o arquivo incluído seja essencial para o funcionamento do script. Por exemplo, arquivos de configuração críticos ou bibliotecas fundamentais.
include: É recomendado quando você quer incluir arquivos que não são críticos para a execução do script. Por exemplo, blocos de código opcionais ou partes de uma página que podem ser carregadas independentemente.
Sintaxe:
Ambos têm sintaxe semelhante:


require 'arquivo.php';
include 'arquivo.php';


Desempenho:
O desempenho entre require e include é quase idêntico, com diferenças tão pequenas que geralmente são negligenciáveis. O impacto real está no comportamento em relação a erros.

Em resumo, require é mais seguro quando você precisa que um arquivo seja incluído de forma obrigatória e crítica para o funcionamento do script, enquanto include é mais flexível e permissivo, útil para inclusão de partes opcionais ou não essenciais do código.
*/
?>

