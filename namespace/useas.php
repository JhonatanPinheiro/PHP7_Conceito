<?php namespace Outro\Nome;?>
<div class="titulo"> USE/AS </div>
<?php
echo __NAMESPACE__ . '<br>';

include('useas_arquivo.php');

function soma($a,$b){
    return $a . $b; #Está errado, será apenas para diferenciar 
 }

class Classe {
    public $var;
    function func() {
        echo __NAMESPACE__ .'->' . __CLASS__ . '->' . __METHOD__ . 'br' ;
    }
}

#Posso fazer dessa maneira passando o caminho e o NAMESPACE
echo \Nome\Bem\Grande\constante . '<br>';

#Posso fazer dessa maneira usando o USE
use const \Nome\Bem\Grande\constante;
echo constante . '<br>';

#Posso fazer de uma segunda maneira usando o USE porém irei utilizar Alias. 
use Nome\Bem\Grande AS ctx;
echo soma(1,2). '<br>'; # Porém estarei referenciando o função desse mesmo NAMESPACE 'Outro\Nome' - Nesse próprio arquivo 'useas.php'
echo ctx\soma(1,2).'<br>'; #Aqui sim estárei referencia o NAMESPACE do meu outro arquivo 'useas_arquivo' com seu NAMESPACE 'Nome\Bem\Grande'.



?>