<div class="title"> DESAFIO STRING </div>
<hr><br>
<?php


/*
ENUNCIADOS

Avaliando os métodos da documentação de string, qual o método que a posição do texto 'abc' na string
'!AbcBcabc' retorno 1?

*/

echo strpos('!AbcaBcabc', 'abc'); # stripos — Encontra a primeira ocorrencia de uma string porém ela faz a diferenciação de maiúsculas e minúsculas.
echo '<br>';
echo 'Resposta Correta: ';
echo stripos('!AbcaBcabc', 'abc'); # stripos — Encontra a primeira ocorrencia de uma string sem diferenciar maiúsculas e minúsculas.# stripos — Encontra a primeira ocorrencia de uma string sem diferenciar maiúsculas e minúsculas.
echo '<br>';
echo strpos(strtolower('!AbcaBcabc'), 'abc');
echo '<br>';

?>