<?php

class Pessoa {
    #Criando os atributos da classe com seus respectivos modificadores de acesso
    public $nome;
    public $idade;

    #Criando um construtor
    function __construct($nome, $idade){
        #Acessando meu objeto e atribuindo um valor para ele para cada atributo (Oque está sendo passado no parâmetro)
        $this->nome = $nome;
        $this->idade = $idade;
    }

    #Criando uma função que printa na tela todos os valores do objeto e seus valores que esão setados no atributos
    public function apresentar(){
         return "{$this->nome}, {$this->idade} anos";
    }
}

?>