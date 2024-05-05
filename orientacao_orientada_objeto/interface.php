<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> INTERFACE </div>
    <hr><br>
    <?php
    #Eu posso ter numeras interface. Esse interface ela pode extender de outras interface.

    interface Animal{
        function respirar();
    }

    interface Canino extends Animal{
        function latir();
    }

    interface Mamifero{
        function pular();
    }    

    interface Fenino{
        function correr();
    }

    #Usa-se implements para implementar a classe com a interface
    class Cachorro implements Animal, Canino, Mamifero{
        function respirar(){
            return '<br>Irei respirar Oxigênio';
        }
        function latir(){
            return '<br>au au au';
        }

        function pular(){
            return '<br>pok pok';
        }

        function correr(){
            return '<br>Vrummmm';
        }
    }

    $animal1 = new Cachorro();
    echo $animal1->respirar();
    echo $animal1->pular();
    echo $animal1->correr();

    echo '<br>';
    var_dump($animal1);
    echo '<br>';
    var_dump($animal1 instanceof Cachorro);
    echo '<br>';
    var_dump($animal1 instanceof Canino);
    echo '<br>';
    var_dump($animal1 instanceof Mamifero);
    echo '<br>';
    var_dump($animal1 instanceof Fenino);

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>