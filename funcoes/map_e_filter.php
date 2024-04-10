<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title">Map e Filter </div>
    <hr><br>
    <?php

    /* 
        | MAP |
        -> Para que ele serve: Transforma um Array em outro Array e cada elemento poderá ser transformado em parte de uma função ! 

        Exemplo: Quando quero pegar os valor pares e impares do array e criar um outro array para colocar nesse novo array valores impar irão prencher com o nome 'I' e valores pares com valor 'P' 
            1          2       3          4
            Função    Função   Função     Função 
            Impar     Par      Impar      Par


        Exemplo: Quando quero dobra o valor recebido no array e pegar esse valor e dobrar e criar um novo array com o valores dobrandos
            3            7              2         11
        Função       Função        Função     Função 
            6            14             4         22

   
         | FILTER |
        -> Para que ele serve: Fazer um filtro de um Array ! 

        Exemplo: Quando quero pegar os valor somentes pares e com isso ele irá criar um outro array me retornando apenas com os valores pares trazidos (Somente verdadeiro, valores que estão dentro do filtro)
            1          2       3          4
            Função    Função   Função     Função 
            Impar     Par      Impar      Par

    Retorno :  2 e 4
    
    */
    
    $notas = [5.8, 7.3, 9.8, 6.7];
    $notasArredondadas = [];

    ##-------------------------Jeito 1---------------------------
    foreach($notas as $index => $valueNota){
        $notasArredondadas[] = round($valueNota);
    }

    print_r($notasArredondadas);
    echo '<hr>';
    ##---------------------------Jeito 2 Usando MAP--------------
    $notasArredondadas2 = array_map('round', $notas);
    #print_r($notasArredondadas2);

    $apenasOsAprovados = [];

    foreach($notas as $index => $valueNota){
        if($valueNota >= 7){
            $apenasOsAprovados2[] = $valueNota;
        }
    }

    echo '<br>';
    print_r($apenasOsAprovados2);

    ##----------------------------------------Tralhando com a Função FILTER------------------
    echo '<hr>';
    function aprovadosAcimaDaMedia($valueNota){
        return $valueNota >= 7;
    }
    echo '<br>';
    
    $apenasOsAprovados2 = array_filter($notas,'aprovadosAcimaDaMedia');
    print_r($apenasOsAprovados2);

    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>