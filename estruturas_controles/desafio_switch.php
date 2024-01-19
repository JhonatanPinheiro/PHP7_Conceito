<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div class="title"> Desafio - Switch </div>
    <hr><br>
    <form action='#' method="post">
        <input id='param' type="text" name="param">
        <select name="conversao" id="conversao">
            <option value="NULL"> - </option>
            <option value="km-milha">KM > Milha </option>
            <option value="milha-km">Milha > KM </option>
            <option value="metro-km">Metro > KM</option>
            <option value="km-metro">KM > Metro</option>
        </select>
        <button>Calcular</button>
        <!-- <input type="submit" value="Converter"> -->
    </form>

    <?php
    $valueOption = $_POST['conversao'];
    $valueParam = $_POST['param'];
    $tipoPrimitivoFloatValuesParam =  floatval($valueParam);

    if (!!$valueParam) {
        switch ($valueOption) {
            case 'km-milha':
                $kmMilha = $valueOption;
                $valueOptionBooleano = (bool)$valueOption;

                $valueConvertido = $valueParam * 0.621371;
               
                echo '<br>';
                echo "<span class='negrito'>KM Informado:</span> $valueParam";
                echo '<br>';
                echo "<span class='negrito'>KM Convertido para Milhas:</span> $valueConvertido";
                echo '<iconify-icon icon="healthicons:walking-outline"></iconify-icon>';

                break;

            case 'milha-km':
                $milhaKm = $valueOption;
                $valueOptionBooleano = (bool)$valueOption;

                $valueConvertido = $valueParam * 1.60934 ;
               
                echo '<br>';
                echo "<span class='negrito'>Milha Informado:</span> $valueParam";
                echo '<br>';
                echo "<span class='negrito'>Milha Convertido para KM:</span> $valueConvertido";
                echo '<iconify-icon icon="healthicons:walking-outline"></iconify-icon>';
                break;

            case 'metro-km':
                $metroKm = $valueOption;
                $valueOptionBooleano = (bool)$valueOption;

                $valueConvertido = $valueParam / 1000 ;
               
                echo '<br>';
                echo "<span class='negrito'>Metro Informado:</span> $valueParam";
                echo '<br>';
                echo "<span class='negrito'>Metro Convertido para KM:</span> $valueConvertido.km";
                echo '<iconify-icon icon="healthicons:walking-outline"></iconify-icon>';
                break;

            case 'km-metro':
                $kmMetro = $valueOption;
                $valueOptionBooleano = (bool)$valueOption;
                
                $valueConvertido = $valueParam * 1000 .'m' ;

                echo '<br>';
                echo "<span class='negrito'>KM Informado:</span> $valueParam";
                echo '<br>';
                echo "<span class='negrito'> KM Convertido para Metro:</span> $valueConvertido";
                echo '<iconify-icon icon="healthicons:walking-outline"></iconify-icon>';
                break;
            default:
                echo "<p class='mensage-warning'><strong>Por favor escolha uma opção para converter os valores!</strong><p/>";
        }
    } else {
        echo "<p class='mensage-warning'><strong>Por favor, preenche o campo com o valor que deseja converte! </strong><p/";
    }

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</html>

<style>
    form>* {
        font-size: 1.8rem;
    }

    .mensage-warning {
        color: orangered;
    }

    .negrito{
        font-weight: 900;
        font-size: 28px;
    }
</style>