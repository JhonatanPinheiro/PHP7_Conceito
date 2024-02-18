<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Foreach </div>
    <hr><br>
    <?php
     $array = ['Segunda',
               'Terça',
               'Quarta',
               'Quinta',
               'Sexta',
               'Sabado',
               'Domingo'
            ];
    
    echo 'Mostrando na tela os valores que estão armazenado na matriz <br>';
    foreach($array as $valor){
      echo "{$valor} <br>";
    }

    echo '<hr>';

    echo 'Mostrando na tela os valores que estão armazenado na matriz e sua posição. Coluna 1 (Posição) | Coluna 2 (Valor Armazenado) <br>';

    foreach($array as $indice => $valor){
        echo "$indice => $valor <br>";
    }
    

    echo '<hr>';

    echo 'Mostrando na tela os valores que estão armazenado na matriz <br>';

    $matrix = [
        ['a','b','c','d'],
        [ 1 , 2 , 3 , 4]
    ];


    foreach($matrix as $linha){
        //echo "{$linha} <br>";
        foreach($linha as $value){
            echo "{$value} <br>";
        }
    }

    echo '<br> <br>';

    echo 'Mostrando na tela os valores que estão armazenado na matriz e sua posição. Coluna 1 (Posição) | Coluna 2 (Valor Armazenado) <br>';

    foreach($matrix as $linha){
        //echo "{$linha} <br>";
        foreach($linha as $indice => $value){
            echo "{$indice} => {$value} <br>";
        }
    }


    echo '<br> <br>';

    echo '<hr>';


    /* Esse é um exemplo e explicativo quando usamos o foreach. Para cada parametro utilizado ele armazerá as informações conforme está descrita abaixo. Se queremos armazenar e coletar as informações das posiçãos será forma   . Se queremos apenas o valor será forma dois

    // (#####| 1 |######)
    $NOMEDOARRAY = ['A','B','C','D','E'];
    foreach($NOMEDOARRAY as $INDICEPOSICAO => $VALOR){
        echo "{$NOMEDOARRAY} {$INDICEPOSICAO} {$VALOR}";
    }

    //(#####| 2 |######)
     foreach($NOMEDOARRAY as $VALOR){
        echo "{$NOMEDOARRAY} {$VALOR}";
    }
    */

    echo '<br><br>';
    echo 'Pegando o valor dos arrays e dobrando eles <br> Exemplo: Dobro de 1 é 2 <br> Exemplo: Dobro de 2 é 4 <br> etc ... <br>';

    $numero = [1,2,3,4];
    foreach($numero as $dobrar){
        $dobrar *= 2;
        echo "{$dobrar} <br>";
    }

    echo '<br><br>';
    echo  '<strong>$numero = [1,2,3,4]</strong> <br>';
    echo 'Pegando o valor dos arrays e somando com os mesmo valores que estão no array <br> Exemplo: 1 + 1 = 2 <br> Exemplo: 2 + 2 = 4 etc ... <br>';

    foreach($numero as $somar){
        $somar = ($somar + $somar);
        echo "{$somar} <br>";
    }

    echo '<br><br>';
    echo  '<strong>$numero = [1,2,3,4]</strong> <br>';
    echo 'Pegando o valor dos arrays e Concatenando com  ABC <br>';
    foreach($numero as $concatenar){
        $concatenar .= "ABC";
        echo "{$concatenar} <br>";
    }

    
   echo '<br><br>';
   echo  '<strong>$numero = [1,2,3,4]</strong> <br>';
   echo 'Pegando o valor dos arrays e dividindo por 2 <br>';
    foreach($numero as $dividir){
        $dividir/=2;
        echo "{$dividir} <br>";
    }

    echo '<br><br>';
    echo  '<strong>$numero = [1,2,3,4]</strong> <br>';
    echo 'Pegando o  resto/modulo da divisão dos valores dos arrays. Estou fazendo divisão por dois <br>';

     foreach($numero as $resto_divisao){
         $resto_divisao%=2;
         echo "{$resto_divisao} <br>";
     }
 
    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>