<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> WHILE | DO WHILE</div>
    <hr><br>
    <?php
        echo 'Usando WHILE <br>';
        const VALOR_LIMITE = 5;
        $contador = 0;

        // Enquando contador for menor que VALOR_LIMITE, faça
        while($contador < VALOR_LIMITE){
            echo "while: $contador <br>";
            $contador++;
    
        }

        echo '<hr>';
        echo 'Usando DO WHILE <br>';
        $contador = 0;

        // Faça isso ... enquanto contador for menor que VALOR_LIMITE
        do{
            echo "while: $contador <br>";
            $contador++;
        }while($contador < VALOR_LIMITE);

        echo '<hr>';

        echo 'Usando o FOR com apenas 2 parametro  (Condição e Contador)<br>';
        $contador = 0;
        for(;$contador < VALOR_LIMITE;){
            echo "While: {$contador} </br>";
            $contador++;
        }

    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>