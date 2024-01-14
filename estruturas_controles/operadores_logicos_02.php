<!DOCTYPE html>
<html>
    <head>
        <link href="../recursos/css/style_pages.css" rel="stylesheet">
    </head>
    <body>
        <div class="title"> Operadores Lógicos 02 </div>
        <hr><br>
        <?php

        echo "<p class='divisao'>Exemplo </p><hr>";
        $idade = 80;
        $sexo = strtoupper('M');
        $pagouPrevidencia = true;

        $homemPodeAposentar = $idade >= 65 && $sexo === 'M';
        $mulherPodeAposentar = $idade >= 60 && $sexo === 'F';
    
    
        $podeSeAposentarMulher = $pagouPrevidencia && 
            (
                $homemPodeAposentar
            );

        $podeSeAposentarHomem = $pagouPrevidencia && 
            (
                $mulherPodeAposentar
            );

        #Condições para    
        if ($podeSeAposentarMulher) {
            echo "<p class='homem'>Pode se aponsentar! Pois você é do sexo: <span class='sexo'>({$sexo})</span> </p>";
        } else if ($podeSeAposentarHomem) {
            echo "<p class='mulher'>Pode se aponsentar! Pois você é do sexo: <span class='sexo'>({$sexo})</span> </p>";
        } else if ($pagouPrevidencia == false){
            echo 'Você precisa entrar em contato com seu Advogado';
        } elseif ($sexo != 'M' || $sexo != 'F' ){
            echo 'Por favor informa um sexo válido';
        } else {
            echo "<div>Você terá que trabalhar mais um pouco...!</div>";
        }


        ?>
    </body>
</html>

<style>
    .mulher{
        color: pink;
    }
    .homem{
        color: aqua;
    }
    .sexo{
        color: black;
    }
</style>
