<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Herança </div>
    <hr><br>
    <?php
    #Criando uma classe
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

    $usuario1 = new Usuario('Gustavo Mendonça','21','gust_mend');
    $usuario1->apresentar();

    unset($usuario1); #Chamando meu Desconstrutor;
    $usuario1->apresentar();

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>