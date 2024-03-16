<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Declarando Tipos </div>
    <hr><br>
    <?php
    function somar1($a,$b){
        echo "<span> Somando $a + $b = </span>";
        return $a + $b;
    }

    echo somar1(1,2) . '<br>';
    echo somar1(1.7,2.5) . '<br>';
    echo somar1(1, '4dois') . '<br>';

    echo '<hr>';

    function somar2(int $a, int $b){
        echo "<span> Somando $a + $b = </span>";
        return $a + $b;
    }

    echo somar2(1,2) . '<br>';
    echo somar2(1.7,2.5) . '<br>';
    echo somar2(1, '4dois') . '<br>';


    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>