<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Datas #01 </div>
    <hr><br>
    <?php
    echo time() . '<br>';
    echo  date('D,d \d\e M \d\e Y H:i A') . '<br>';
    ##https://www.php.net/manual/en/function.date.php

    echo strftime('%A, %d de %B de %Y', time()) . '<br>';

    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');
    echo strftime('%A, %d de %B de %Y', time()) . '<br>';
   
    $amanha = time() + ((24 * 60) * 60);
    echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';
    $proximaSemana = strtotime('+1 week');
    #$proximaAno = strtotime('+1 year');
    echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

    $dataFixa = mktime(15,30,50,1,25,1999);
    echo strftime('%A, %d de %B de %Y', $dataFixa) . '<br>';

    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>