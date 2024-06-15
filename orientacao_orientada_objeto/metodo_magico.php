<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Métodos Mágicos </div>
    <hr><br>
    <?php
      class Pessoa{
        public $nome;
        public $idade;

        function __construct($nome,$idade){
          echo 'Construtor invocado! <br>';
          $this->nome = $nome;
          $this->idade = $idade;

        }

        function __destruct(){
          echo '<br>E morreu';
        }

        #Definimos um método toString sempre que o objeto entrar no  contexto que ele precisa ser convertido para umna string esse método é chamado!
        public function __toString(){
          return "{$this->nome} tem {$this->idade} anos.";
        }

        public function apresentar(){
          echo "$this"."<br>";
        }

        public function __get($atrib){
          echo "Lendo atributo não declado: {$atrib}<br>";
        }

        public function __set($atrib, $valor){
          echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
        }

        public function __call($metodo, $params){
          echo "Tentando executar  método '${metodo}'";
          echo ", com os parametros";
          print_r($params);
        }

      }

      $pessoa = new Pessoa('Ricardo',40); #__construtor
      echo '<hr>';
      $pessoa->apresentar(); #Chamando o __toString
      echo $pessoa,'<br>';  #Chamando o __toString

      $pessoa->nome = 'Reinaldo';
      $pessoa->apresentar();  #Chama o método diretamente sem o __call

      echo $pessoa->nomeCompleto = 'Muito Legal'; #__set
      $pessoa->nomeCompleto; #__get

      echo $pessoa->nomeCompleto; #Acessa o atributo diretamente sem o __get

      $pessoa->exec(1,'teste',true,[1,2,3]); #__call porque o metodo não existe no objeto

      $pessoa = null;

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>