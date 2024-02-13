<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Laço For </div>
    <hr><br>
    <?php
        for($cont = 1; $cont <= 5; $cont++){
            echo "$cont <br>";
        }

        echo '________<br><br>';

        for(; $cont <= 10; $cont++){
            echo "$cont<br>";
        }


        echo '________<br><br>';

        for(;$cont <= 15; $cont++){

            echo "$cont<br>";
        }

        echo '________<br><br>';

        $array = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
        print_r($array);
        
        echo '________<br><br>';

        for($i=0; $i < count($array); $i++){
            echo"{$array[$i]} <br>";
        }

        echo '________<br><br>';

        for($i=0; $i < count($array); $i++){
            echo "Posição do Array =><strong> {$i} </strong>";
            echo " Valor armazenado: <strong> {$array[$i]} </strong> <br>";
        }

        echo '________<br><br>';

        $matrix = [
            ['a','b','c','d'],
            [ 1 , 2 , 3 , 4]
        ];
                   #'R''C'
        echo $matrix[0][3];

        echo '________<br><br>';

        for($i = 0; $i < count($matrix); $i++){
            for($j = 0; $j < count($matrix[$i]); $j++){
                 print_r($matrix[$i][$j]);
            }
        }

        
        


    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>