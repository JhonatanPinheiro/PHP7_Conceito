<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Datas #02 </div>
    <hr><br>
    <?php

    $formatoData1 = 'D, d \d\e M \d\e Y';
    $formatoData2 = '%A, %d de %B de %Y';
    $formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

    $agora = new DateTime();

    print_r($agora);
    echo '<hr>';

    echo $agora->format($formatoData1) . '<br>';

    setlocale(LC_TIME, 'pt_BR');
    echo strftime($formatoData2, $agora->getTimestamp()) . '<br>';


    echo '<br><strong> Usando a Váriavel amanha: </strong><br>';
    $amanha = new DateTime('+1 day');
    echo strftime($formatoData2, $amanha->getTimestamp()) . '<br><br>';
    $amanha->modify('+10 day');
    echo strftime($formatoData2, $amanha->getTimestamp()) . '<br>';

    #Setando a data. YYYY-MM-DD
    $amanha->setDate(2000,5,20);
    echo strftime($formatoData2, $amanha->getTimestamp()) . '<br>';

    
    echo '<br><strong> Usando a Váriavel datafixa: </strong><br>';
    $dataFixa = new DateTime('1975-01-25 15:30:50');
    echo strftime($formatoDataHora,$dataFixa->getTimestamp()) . '<br>';


    echo '<hr>';
    echo 'Criando cenário para o uso de datas: ' . '<br>';
    $dataPassada = new DateTime('2000-05-17');
    $dataFutura = new DateTime('2030-11-26');
    $outraData = new DateTime('2030-11-26');

    echo ($amanha > $dataPassada ? 'Maior': 'Menor') . '<br>';
    echo ($amanha > $dataFutura ? 'Maior': 'Menor') . '<br>';
    echo ($outraData == $dataFutura ? 'Igual': 'Diferente') . '<br>';

    echo '<br>';
    $tz = new DateTimeZone('America/Sao_Paulo');
    $agora = new DateTime(NULL,$tz);
    echo $agora->format('d/M/Y H:i:s');

    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>