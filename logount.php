#Somente irei destruir a session e encaminhar para a página login
<?php
session_start();
session_destroy(); #Destruindo a sessão
unset($_COOKIE['usuario']); #Limpando o cookie
setcookie('usuario','');#Limpando o cookie

header('Location: login.php');
?>