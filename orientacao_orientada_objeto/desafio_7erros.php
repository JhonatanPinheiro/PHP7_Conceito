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

    abstract class ClasseAbstrata extends Template{
        public function metodo3(){
            echo "Estou funcionando";
        }
    }

    class Classe implements ClasseAbstrata{
        function ___construct($parametro){

        }
    }

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>