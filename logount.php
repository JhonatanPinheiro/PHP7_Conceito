#Somente irei destruir a session e encaminhar para a página login
<?php
session_start();
session_destroy();

header('Location: login.php');
?>