<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title">Membros de Classe (Static) </div>
    <hr><br>
    <?php
    class A{
        public $naoStatic = 'Variavel de instância';
        public static $static = 'Variável de classe (estática)';
    
        function mostrarA(){
            echo "Não Estático: {$this->naoStatic} <br>";
            #Tentativa 1 Não funciona
            echo "Não Estático: {$this->static} <br>";
            #Tentativa 2 #Não funciona com interpulação
            echo "Não Estático =  {self::$static} <br>";
            #Tentativa 3
            echo "Não Estático = " . self::$static . "<br>";


        }
    }

    $obejtoA = new A();
    $obejtoA->mostrarA();



    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>