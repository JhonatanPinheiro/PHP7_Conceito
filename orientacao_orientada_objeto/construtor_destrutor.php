<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Construtor e Destrutor </div>
    <hr><br>
    <?php
    class Pessoa{
        public $nome;
        public $idade;
        public $cidade;

        function __construct($novoNome,$idade = 18, $cidade ='São Paulo'){
            $this->nome = $novoNome;
            $this->idade = $idade;
            $this->cidade = $cidade; 
        }

        function __destruct(){
            echo 'E morreu<br>';
        }

        public function apresentar(){
            return "Me chamo: {$this->nome}, tenho {$this->idade} anos. Nasci na cidade de {$this->cidade} <br><hr>";
        }    
    }

    $canditado1 = new Pessoa('Jhonatan',24,'Toronto');
    $canditado2 = new Pessoa('Julio',28, 'New York');
    $canditado3 = new Pessoa('Maria');
    $canditado4 = new Pessoa('Anne');

    echo $canditado1->apresentar();
    echo $canditado2->apresentar();
    echo $canditado3->apresentar();
    echo $canditado4->apresentar();

    ##Chamando meu __destruct. O unset ele é responsavel por chamar o destruct
    #$canditado3 = NULL; #Dessa forma também é usada para chamar o destruct
    unset($canditado3);



    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>