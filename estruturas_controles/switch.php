<!DOCTYPE html>
<html>

    <head>

    </head>

    <body>
        <div class="title"> Switch </div>
        <hr><br>
        <?php
            $categoria = 'Luxo';
            $preco = 0.0;
            $carro = '';

            if($categoria === 'Luxo'){
                $carro = 'Mercedes';
                $preco = 250000;
            }else if ($categoria === 'SUV'){
                $carro = 'Renagade';
                $preco = 80000;
            }else if ($categoria === 'Sedan'){
                $carro = 'Etios';
                $preco = 55000;
            }else {
                $carro = 'Mobi';
                $preco = '33000';
            }

            $precoFormatado = number_format($preco,2,',','.');
            echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";
            echo $precoFormatado;


            // Usando SWITCH
            $categoria1 = 'SUV';
            $preco = 0.0;
            $carro = '';

            switch(strtolower($categoria1)){
                case 'luxo':
                    $carro = 'Mercedes';
                    $preco = 250000;
                    break;
                case 'suv':
                    $carro = 'Renagade';
                    $preco = 80000;
                    break;
                case 'sedan':
                    $carro = 'Etios';
                    $preco = 55000;
                    break;
                default:
                    $carro = 'Mobi';
                    $preco = '33000';
            }

            $precoFormatado = number_format($preco,2,',','.');
            echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";
            echo $precoFormatado;

        ?>
    </body>

</html>

<style>


</style>