<?php namespace App; ?>
<div class="titulo"> Sub-Namespaces</div>
<?php
echo __NAMESPACE__ ."<br>";
const constante = 123;
echo constante . '<br>';

namespace App\Principal;
echo __NAMESPACE__ ."<br>";
const constante = 234;

namespace App\Principal\Especifico;
echo __NAMESPACE__ ."<br>";
const constante = 456;

#Primeira Maneira de Acessa
#Iremos começar a acessar os valores que estão dente de cada NAMESPACE e SUBNAMESPACE
echo '<br><hr><br>';
echo \App\constante . '<br>';
echo \App\principal\constante . '<br>';
echo constante . '<br>';

echo '<hr>';
#Segunda Maneira de Acessa
echo constant(__NAMESPACE__ .'\constante' );

?>