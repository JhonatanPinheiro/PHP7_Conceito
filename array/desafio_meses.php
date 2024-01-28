<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div class="title"> Desafios dos Meses </div>
    <hr><br>
    <?php
    $meses = array(
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro"
    );

    echo '<br>';
    print_r($meses);

    $mesesUtizandoChave = array(
        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro"
    );

    echo '<br>';         
    echo '<br>';     
    
    print_r($mesesUtizandoChave);
  
    echo '<br>';         
    echo '<br>';     
    
    #Estou utilozando um for para mostrar todos os meus valores dentro do meu array 

    for($i=0; $i<=count($mesesUtizandoChave); $i++){
        echo $mesesUtizandoChave[$i];
    }


    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style>

</style>