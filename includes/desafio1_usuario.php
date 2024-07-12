<?php

 #Criando uma nova Classe chamada Usuario que ela Herdará os atributos da minha classa Pai que se chamado Pessoa
 class Usuario extends Pessoa{

    public $login;
    function __construct($nome, $idade, $login){
        parent::__construct($nome,$idade);
        $this->login = $login;
    }

    function apresentar(){
        $login = "@{$this->login}:";
        return $login . parent::apresentar(); #Estou chamando a função apresentar que estou herdando da minha classe Pessoa e aleém disso incrementando a minha função apresenta da classe usuário que está na minha classe Usuario
    }
}

?>