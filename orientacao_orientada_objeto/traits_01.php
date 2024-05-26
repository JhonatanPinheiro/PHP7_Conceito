<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> TRAITS 01 </div>
    <hr><br>
    <?php
     trait validacao{
        #Aqui dentro definimos métodos
        public function validarString($str){
            return isset($str) && $str !=='';
        }
    }

    trait validacaoMelhor {
        public function validarStringMelhor($str){
            return isset($str) && trim($str);
        }
    }

    #Não usamos uma trait a partir de uma herança. Usamos uma traits com a palavra use
    class Usuario{
        use validacao,validacaoMelhor;
    }



    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>