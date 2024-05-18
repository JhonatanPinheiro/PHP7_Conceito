<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> DESAFIO DO 7 ERROS </div>
    <hr><br>
    <?php
    interface Template{
        function metodo1();
        public function metodo2($parametro);
    }

     #Implements usado em relação de classe com interface
    abstract class ClasseAbstrata implements Template{
        public function metodo3(){
            echo "Estou funcionando";
        }

        public function metodo1(){

        }
    }
  #Uma classe não implementa outra classe. Ela extend 
    class Classe extends ClasseAbstrata{
        function ___construct($parametro){

        }
        
        public function metodo2($parametro){

        }
    }

    $exemplo = new Classe('...');
    $exemplo->metodo3();

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>