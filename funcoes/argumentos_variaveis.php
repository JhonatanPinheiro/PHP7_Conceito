<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title">Argumentos Variáveis </div>
    <hr><br>
    <?php
        //Usando uma função dos dois números
        function soma($a, $b){
            return $a + $b;
        }

        echo soma(15,15);

        echo '<hr>';

        // Fazendo a função que eu posso passar quantos números que eu quiser que ele irá somar. 
        function somaCompleta(...$numeros){
            #Quando colamos 3 pontinhos ele pegar todos os valores e transforma em um Array.
            #print_r($numeros);

            $soma = 0;
            foreach($numeros as $num){
                $soma+=$num;
            }
            return $soma;
        }


        #echo somaCompleta(1,2,3,4,5,6,7,8,9,10);
        echo somaCompleta(2,2,2,2,10);

        echo '<hr>';

        $array = [10,20,100];
        echo somaCompleta(...$array);
        echo '<hr>';

        function membros($titular, ...$dependentes){
            echo "Titular: $titular <br>";
            if($dependentes){
                foreach($dependentes as $dep){
                    echo "Dependentes:  $dep <br>";
                }
            }
        }


        echo '<br>';

        membros("Jhonatan", "teste1", "teste2");

        membros("Layara");



    
    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>