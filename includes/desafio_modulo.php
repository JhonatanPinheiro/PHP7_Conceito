<div class="titulo"> Desafio Módulo </div>
<?php
ini_set('display_errors',1);
require_once('desafio1_pessoa.php');
require_once('desafio1_usuario.php');

$usuario = new Usuario('Jhon',24,'teste');
$usuario->apresentar();
?>