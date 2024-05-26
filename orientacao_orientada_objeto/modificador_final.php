<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> MODIFICADOR FINAL </div>
    <hr><br>
    <?php
    #Criando uma classe Abstrata
    abstract class Abstrata{
        #Criando uma função abstrata dentro da minha classe Abstrata
        abstract public function metodo1();
        
        public final function metodo2(){
            echo 'Não vou mudar! <br>';
        }
    }

   class Classe extends Abstrata{
        public function metodo1(){
            echo 'Executando método 1<br>';
        }

       /*public function metodo2(){
            echo 'Extendendo método 2! <br>';
        }*/

    }

    #Classe ùnica, ela não poderá ter herança
    final class Unica{
        public $att2 = 'Valor é Unico';
    }

    $classe = new Classe();
    $classe->metodo1();
    #$classe->metodo2();

    
    $unica = new Unica();
    echo $unica->att2;

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>