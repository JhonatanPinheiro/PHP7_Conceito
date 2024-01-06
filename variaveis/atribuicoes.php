<div class="title"> ATRIBUIÇÕES </div>
<hr><br>

<?php

$title = 'Atribuições';

$numero = 10;
echo '<br>' .  $numero;
echo '<br>' . $numero = $numero - 3;
echo '<br>' . $numero + 1.5;

#Usando decremento 
$decremento = 100;

$decremento--;
echo '<br>' . $decremento; 

--$decremento;
echo '<br>' . $decremento; 


#Usando incremento
$incremento = 100;

$incremento ++;
echo '<br>' . $incremento; 

++$incremento;
echo '<br>' . $incremento; 

#Decrementando o valor da variável (Tirando 5 unidades do valor da variável)
$declemento5unidade = 20;

$declemento5unidade -= 5;
echo '<br>' . $declemento5unidade;

#Incrementando o valor da variável (Adicionando 5 unidades no valor da variável)
$incrementa5unidade = 20;

$incrementa5unidade += 5;
echo '<br>' . $incrementa5unidade;

#Multiplicando o valor da variável (Fazendo 5*3 no valor da variável)
$multiplica3vezes = 20;

$multiplica3vezes *= 3;
echo '<br>' . $multiplica3vezes;

#Dividindo o valor da variável (Fazendo 20/2 no valor da variável)
$divindoPorDois = 20;

$divindoPorDois /= 2;
echo '<br>' . $divindoPorDois;

#Modulo da Divisão (Resto) com valor da variável (Fazendo resto da divisão de 20/2  no valor da variável)
$restoDaDivisao = 20;

$restoDaDivisao %= 2;
echo '<br>' . $restoDaDivisao;

#Fazendo a potência com valor da variável (Fazendo  valor da variáve elevado a 2)
$potenciaDaVariavel = 20;

$potenciaDaVariavel **= 2;
echo '<br>' . $potenciaDaVariavel;

#Fazendo a concatenação de numeros (Cuidado para não confundir)
$concatenar = 1;

$concatenar .= 9999;
echo '<br>' . $concatenar;

#Fazendo a concatenação com Strings (Textos)
$concatenarString = 'Jhonatan';

$concatenarString .= 'Pinheiro';
echo '<br>' . $concatenarString;

#Fazendo a concatenação com Strings (Textos) porém de forma mais longa
$concatenarString = 'Jhonatan';

$concatenarString = $concatenarString . 'teste';
echo '<br>' . $concatenarString;

#Fazendo muitas concatenaçã/armazenação de dados na mesma varivael com Strings (Textos)
$concatenarString = 'Jhonatan';

$concatenarString = $concatenarString . 'Pinheiro';
echo '<br>' . $concatenarString;
$concatenarString = $concatenarString . ' DBA';
echo '<br>' . $concatenarString;
$concatenarString = $concatenarString . ' Programador';
echo '<br>' . $concatenarString;

#
#$varivelInexistente = 'Valor Existente';
echo '<br>' . $varivelInexistente;
## Explicando: Caso eu não tenho o valor nenhum valor vindo dessa variável $varivelInexistente ele colocará o valor na variavel $varivelInexistente como 'valor padrão' 
$valor = $varivelInexistente ?? 'valor padrão';
echo '<br>' . $valor;

?>