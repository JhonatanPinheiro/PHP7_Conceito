<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Retornando uma Função </div>
    <hr><br>
    <?php
    function soma($a){
        return function($b) use ($a){ #Dessa forma quando colocamos use estamos pedindo que ele pode usar o valor de $a que está na primeiro função 
                    return $a + $b;
                };
    }

    echo soma(3)(3);

    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>