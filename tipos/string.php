<div class="title">TIPO - STRING </div>
<hr><br>
<?php

echo 'Eu sou uma String';
echo '<br>';
var_dump("Eu também");

#Concatenação
echo "Nós também" . 'Somos';
echo '<br>', "Também aceito", " virgulas" . '<br>';
echo " 'Teste' " . '"Teste"' . '\'Teste\' ' . "\"Teste\" ";
print("<br> Também existe a função print");
print "<br> Também existe a função print";

// Algumas funções
echo '<br>' . strtoupper('Maximizado'); # Função para deixar a String Maíusculas
echo '<br>' . strtolower('MINÍMIZADO'); # Função para deixar a String Mínusculas
echo '<br>' . ucfirst('deixando a primeira letra com letra  maíscula'); # Função para deixar a String da primeira letra em Maíuscula
echo '<br>' . ucwords('deixando a todas as palavras que começa das palavras em letra  maíscula'); # Função para deixar  as primeiras letras das palavras em String  em  Maíusculas
echo '<br>' . strlen('Mostrando o tamanho dessa string'); # Função para mostrar o tamanho da string
echo '<br>' . mb_strlen('Mostrando o tamanho dessa string', "utf-8"); # Função para mostrar o tamanho da string, porém ela é mais adequada em palavras com acentos
echo '<br>' . substr('Só uma parte da string',7,6); # Função para mostrar apenas a parte da string (Da onde irá começar. até onde irá monstrar)
echo '<br>' . substr('Só uma parte da string',7); # Função para mostrar apenas a parte da string (Caso passa apenas o primeiro parâmetro, apenas começará da posição desejada e mostrará até o final da string)
echo '<br>' . str_replace('teste', '\'Substitui a palavra:teste\'' ,'teste Função para localizar a palavrar e alterar por algo desejado',); # Função para localizar e substituir a palavra por algo desejado
?>