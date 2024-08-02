<div class="title"> GERENCIANDO SESSÃO </div>
<?php
#session_id('ec989d7346fcdae48e4bb8310d672990');
session_start();
echo session_id(); #Será gerado a cada vez fechamos o nosso navegar (Matar o navegador mesmo). Esse função gera um 'HASH'

$contador = &$_SESSION['contador'];

$contador = $contador ? ($contador + 1) : 1;
echo '<br>' . $_SESSION['contador']; 

if($_SESSION['contador'] % 5 === 0 ){
    session_regenerate_id(); # A cada vez que o resto da divisão for 0, ele irá generar uma nova sessão de ID "HASH"
}

if($_SESSION['contador'] >= 15 ){
    session_destroy();
}

?>