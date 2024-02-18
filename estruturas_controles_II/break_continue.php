<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Break | Contiue </div>
    <hr><br>
    <?php
    $count = 10;
    for(;;){
        echo "{$count} <br>";
        $count++;

        if($count > 20){
            break;
        }
    }

    echo "Passei";

    echo "<hr>";
    
    $count = 0;

    for(;;){

        $count++;
        
        if($count%2 === 1){
            echo "impar: {$count} <br>";
            continue;
        }

        echo "{$count} <br>";

        if($count === 50){
            break;
        }
    }

    echo "Passei";


    echo "<hr>";

    foreach(array(1,2,3,4,4,4,4,5,5,5,5,6,7,8,9,10,100,300,) as $value){
        if($value === 100) break;
        if($value == 4 || $value == 5){
            echo "<p class = 'red'>{$value} </p>";
            continue;
        }

        echo "<br>{$value}";

    }

    echo "<br><hr><br>";
    echo 'Contiue: A palavra-chave continue é usada para pular a iteração atual de um loop e continuar com a próxima iteração. ';
    echo "<hr>";
    echo 'break: A palavra-chave break é usada para sair imediatamente de um loop. Quando o PHP encontra uma instrução break, ele interrompe a execução do loop mais interno e continua a execução do código fora do loop. ';
    echo "<hr>";
    echo "Resumo: Resumindo, break é usado para sair completamente de um loop, enquanto continue é usado para pular a iteração atual e continuar com a próxima iteração do loop. Ambas as palavras-chave são úteis para controlar o fluxo de execução em loops, permitindo que você faça operações específicas com base em determinadas condições.";

  
    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style>
    .red{
        color: red;
    }

    .blue{
        color: blue;
    }

</style>