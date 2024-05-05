<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Classe Abstrata </div>
    <hr><br>
    <?php
    #Uma classe abstrata máo pode ser instanciada 
    #Uma classe concreta já pode ser instanciada
    
    abstract class Abstrata{
        public abstract function metodo1();
        abstract protected function metodo2($parametro);   
    }

    abstract class FilhaAbstrata extends Abstrata{
        public function metodo1(){
            echo "Executando método 1 <br>";
        }

        abstract public function metodo3();
    }

    class Concreta extends FilhaAbstrata{
        public function metodo1(){
            echo "Executando método  1 extendido <br>";
            parent::metodo1();
        }
        
        protected  function metodo2($parametro){
            echo "Executando o método 2, com pametro $parametro <br>";
        }

        public function metodo3(){
            echo "Executando método 3<br>";
            $this->metodo2('Interno');
        }

    }

    $c = new Concreta();
    $c->metodo1();
    #$c->metodo2('externo');
    $c->metodo3();

    echo "Fim";
    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>