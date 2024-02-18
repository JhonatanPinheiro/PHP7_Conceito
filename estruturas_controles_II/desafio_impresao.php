<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Desafio Impresão </div>
    <hr><br>
    <!-- 
        ENUNCIADO
            -Imprima apenas os valores do Array que contém indice par
            - Desafio adicional: Resolver com for e foreach
            - Valores esperados: AAA, CCC, EEE
     -->
    <?php
    $array = ["AAA ","BBB","CCC","DDD","EEE","FFF"];

    print_r($array); 
    echo '<br>';

    foreach($array as $indice => $value){
        #echo "{$array} <br>{$indice} => {$value} <br>";

        if($indice%2 === 0){
            echo "<span class = 'resposta'> Resposta: </span> Indice: {$indice} => Value: {$value}";
        }

    }


    echo '<hr>';

    for(;;){
        for($i = 0; $i < count($array); $i++){
            if($i%2 == 0){
                echo "Indice: $i => ";
                echo "$array[$i] ";
            }   
      
        }
        break;

    }

    echo'<br><br>';

    for(;;){
        for($i = 0; $i < count($array); $i++){
            if($i%2 == 1){
                continue;
            }   
            echo "Indice: $i => ";
            echo "$array[$i] ";
        }
        break;

    }

   
    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style>
    .resposta {
        color: green;
        font-weight: 900px;
    }

</style>