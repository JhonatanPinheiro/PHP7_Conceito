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

        public static function mostrarStaticA(){
           # echo "Não Estática = {$this->naoStatic}<br>";
            echo "Estática =". self::$static. "<br>";
        }
    
    }


    $obejtoA = new A();
    $obejtoA->mostrarA();
    #$obejtoA->mostrarStaticA(); #Não é a forma ideal
    A::mostrarStaticA(); #Forma mais adequada de acessar uma função Statica através da classe
    echo A::$static .  '<br>'; // Acessa diretamente a Classe

    A::$static = 'Valor alterado do membro de classe!';
    echo A::$static;


    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>