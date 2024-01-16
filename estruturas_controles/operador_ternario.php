<!DOCTYPE html>
<html>

    <head>

    </head>

    <body>
        <div class="title"> Operadores Ternário </div>
        <hr><br>
        <?php
        $idade = 70;
        $status;

        if ($idade >= 18) {
            
            $status = 'Maior de idade';
            
        } else {

            $status = 'Menor de idade';

            }   
        
            echo"$status<br>";

            $status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
            echo"$status<br>";

            $status = $idade >= 18 ? 'Aposentado' : 'Maior de Idade';

            $tipoMaiorIdade  = ($idade >= 65 ? 'Aposentado' : 'Maior de Idade');

            $tipoMaiorIdade  = $idade >= 65 ? 'Aposentado' : 'Maior de Idade';

            $status = $idade >= 18 ? $idade >= 65 ?  'Aposentado' : 'Maior de Idade' : 'Menor de Idade';

        ?>
    </body>

</html>

<style>


</style>