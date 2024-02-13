<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Comparações entre Arrays </div>
    <hr><br>
    <?php
        $array1 = ['nome' => 'Maria', 'idade' => 20];
        $array2 = ['nome' => 'Maria', 'idade' => 20];
        var_dump($array1 == $array2);
        var_dump($array1 === $array2);

        echo '<br><br>';

        $array3 = [ 'idade' => 20,'nome' => 'Maria'];
        var_dump($array1 == $array3);
        var_dump($array1 === $array3);

        
        echo '<br><br>';
        $array3 = [ 'idade' => 20,'nome' => 'Maria'];
        var_dump($array1 != $array3);
        var_dump($array1 !== $array3);
    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>