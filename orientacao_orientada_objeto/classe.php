<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> CLASSE  </div>
    <hr><br>
    <?php
    class Cliente{
        #ATRIBUTOS
        public $nome = 'Anônimo';
        public $idade  = 18;

        #Definindo uma função

        public function apresentar(){
            echo "Nome:{$this->nome}<br>";
        }
    }

    
    $cliente1 = new Cliente();
    $cliente1 -> apresentar();

    
    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>