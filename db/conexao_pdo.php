<?php

function novaConexao($banco = 'curso_php'){
    $servidor = 'localhost:3306';
    $usuario = 'root';
    $senha = 'root';

    try{
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        #1 Paramentro: Informar o tipo do banco de dados
        #2 Paramentro: Informar o localhost + porta
        #3 Paramentro: usuario
        #4 Paramentro: senha

        return $conexao;
    }catch(PDOException $e){
        die('Error:' . $e->getMessage());
    }
}

?>