<?php

 #Criando uma nova Classe chamada Usuario que ela Herdará os atributos da minha classa Pai que se chamado Pessoa
 class Usuario extends Pessoa{

    public $login;
    function __construct($nome, $idade, $login){
        #$this->nome = $nome;
        #$this->idade = $idade;
        parent::__construct($nome,$idade);
        $this->login = $login;
        echo 'Usuário Criado! <br>';
    }

    function __destruct(){
        echo '<br>Usuario diz: Tchau! <br>';
        parent::__destruct(); #Estou chamando a meu destrutor que estou herdando da minha classe Pessoa e aleém disso incrementando o meu destrutor da classe usuário que está na minha classe Usuario, não sobrescrevendo ela. Será chamado a pai e a filha
    }

    function apresentar(){
        echo "@{$this->login}:";
        parent::apresentar(); #Estou chamando a função apresentar que estou herdando da minha classe Pessoa e aleém disso incrementando a minha função apresenta da classe usuário que está na minha classe Usuario
    }
}

?>