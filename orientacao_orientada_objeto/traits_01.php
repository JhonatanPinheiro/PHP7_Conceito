<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> TRAITS 01 </div>
    <hr><br>
    <?php
     trait validacao{
        #Aqui dentro definimos métodos
        public $a = 'Valor a';
        public function validarString($str){
            return isset($str) && $str !=='';
        }
    }

    #Um trait é uma forma de reutilizar código em várias classes de forma horizontal, ou seja, em classes que não estão relacionadas por meio de herança.
    trait validacaoMelhor {
        public $b = 'Valor b';
        private $c = 'Valor privado';

        public function validarStringMelhor($str){
            return isset($str) && trim($str);
        }
    }

    #Não usamos uma trait a partir de uma herança. Usamos uma traits com a palavra use
    class Usuario{
        use validacao,validacaoMelhor;

        public function imprimirValorC(){
            echo '<br>',$this->c;
        }
    }

    #var_dump(validacao->validarString);
    $usuario = new Usuario();
    var_dump($usuario->validarString(' '));
    echo '<br>';
    var_dump($usuario->validarStringMelhor(' '));
    echo '<br>';
    echo $usuario->a, '<br>' ,$usuario->b;
    echo '<br>';
    echo $usuario->imprimirValorC();

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>