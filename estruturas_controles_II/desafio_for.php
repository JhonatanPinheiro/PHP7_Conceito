<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Desafio For </div>
    <hr><br>
    <!-- 
        #
        ##
        ###
        ####
        #####

    1) Podemos usar incremento $i++
    2) Náo pode usar Incremento $i++ 
    
-->
    <?php

    // Desafio 1

    $array = ["<span class='green'>#</span>","<span class='yellow'>##</span>","<span class='yellow'>###</span>","<span class='yellow'>####</span>","<span class='red'>#####</span>"];

        for ($i = 0; $i <= count($array); $i++){
                print_r($array[$i]. '<br>');
            }
    
    echo '<br>';

    $impresao = '';
    for($count = 1; $count <= 5; $count++){
        $impresao .= '#';
        echo "{$impresao} <br>";
    }
    
    echo'<br><hr><br>';



    // Desafio 2
    for($impresao2 = '#'; $impresao2 !== '######'; $impresao2 .= '#'){
        echo "{$impresao2} <br>";
    }

   

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style>
    .green{
        color:green;
    }

    .yellow{
        color: yellow;
    }

    .red{
        color: red;
    }

</style>