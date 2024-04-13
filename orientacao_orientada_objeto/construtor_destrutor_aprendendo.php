<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Construtor|Destrutor ->  Apredendo </div>
    <hr><br>
    <?php
    class Pessoa {
        public  $nome;
        public  $idade;
        public  $cpf;
        public  $sexo;

        public function __construct($novoNome, $novaIdade, $novoSexo){
                $this -> nome = $novoNome;
                $this -> idade = $novaIdade;
                $this -> sexo = $novoSexo;
        }

        public function __destruct(){
            return "Morreu!!";
        }

        public function apresentar(){
             return "<br> Nome: {$this->nome} <br> Idade: {$this -> idade} <br> Sexo : {$this -> sexo}";
        }

    }

    $p1 = new Pessoa('Japa', '25', 'Masculino');
    echo $p1 -> apresentar();

    $p2 = new Pessoa('Julio', '28', 'F');
    echo $p2 -> apresentar();


    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>