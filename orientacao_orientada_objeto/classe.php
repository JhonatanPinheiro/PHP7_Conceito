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
            return "Nome:{$this->nome} Idade: {$this-> idade}<br>";
        }
    }
   
    $cliente1 = new Cliente();
    echo $cliente1 -> apresentar();

    $cliente1 -> nome = 'Jhonatan';
    echo $cliente1 -> apresentar();

    $cliente2 = new Cliente;
    $cliente2 -> nome = "Layara";
    $cliente2 -> idade = "21"; 
    echo $cliente2 -> apresentar();    
   
   ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>