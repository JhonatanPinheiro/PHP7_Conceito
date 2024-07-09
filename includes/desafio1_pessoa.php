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
        echo 'Pessoa Criada! <br>';
    }
    
    #Criando um destrutor, para quando meu objeto for desalocado
    function __destruct(){
        echo 'Pessoa diz: Tchau!';
    }

    #Criando uma função que printa na tela todos os valores do objeto e seus valores que esão setados no atributos
    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos ";
    }
}

?>