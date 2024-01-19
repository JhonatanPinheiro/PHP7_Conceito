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
            <option value="NULL"> - </option>
            <option value="celsius-fahrenheit">Celsius > Fahrenheit</option>
            <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
        </select>
        <button>Calcular</button>
        <!-- <input type="submit" value="Converter"> -->
    </form>

    <?php
    $valueOption = $_POST['conversao'];
    $valueParam = $_POST['param'];

    if (!!$valueParam) {
        switch ($valueOption) {
            case 'km-milha':
                $kmMilha = $valueOption;
                $valueConvertido = $valueParam * 0.621371;
               
                echo '<br>';
                echo "<span class='negrito'>KM Informado:</span> $valueParam";
                echo '<br>';
                echo "<span class='negrito'>KM Convertido para Milhas:</span> $valueConvertido";
                echo '<iconify-icon icon="healthicons:walking-outline"></iconify-icon>';

                break;

            case 'milha-km':
                $milhaKm = $valueOption;
                $valueConvertido = $valueParam * 1.60934 ;
               
                echo '<br>';
                echo "<span class='negrito'>Milha Informado:</span> $valueParam";
                echo '<br>';
                echo "<span class='negrito'>Milha Convertido para KM:</span> $valueConvertido";
                echo '<iconify-icon icon="healthicons:walking-outline"></iconify-icon>';
                break;

            case 'metro-km':
                $metroKm = $valueOption;
                $valueConvertido = $valueParam / 1000 ;
               
                echo '<br>';
                echo "<span class='negrito'>Metro Informado:</span> $valueParam";
                echo '<br>';
                echo "<span class='negrito'>Metro Convertido para KM:</span> $valueConvertido.km";
                echo '<iconify-icon icon="healthicons:walking-outline"></iconify-icon>';
                break;

            case 'km-metro':
                $kmMetro = $valueOption;
                $valueConvertido = $valueParam * 1000 .'m' ;

                echo '<br>';
                echo "<span class='negrito'>KM Informado:</span> $valueParam";
                echo '<br>';
                echo "<span class='negrito'> KM Convertido para Metro:</span> $valueConvertido";
                echo '<iconify-icon icon="healthicons:walking-outline"></iconify-icon>';
                break;
                
            case 'celsius-fahrenheit':
                $celsiusFahrenheit = $valueOption; 
                $valueConvertido = (($valueParam * (9/5)) + 32);

                echo '<br>';
                echo "<span class='negrito'>Graus Celsius informado:</span> $valueParam ºC" ;
                echo '<br>';
                echo "<span class='negrito'> Graus Celsius convertido para Graus Fahrenheit:</span> $valueConvertido ºF &nbsp;";
                echo '<iconify-icon icon="meteocons:thermometer-fahrenheit" width="100" height="100"></iconify-icon>';
                break;
            
            case 'fahrenheit-celsius':
                $fahrenheitCelsius = $valueOption; 
                $valueConvertido = ((($valueParam - 32) * 5/9));
    
                echo '<br>';
                echo "<span class='negrito'>Graus Fahrenheit informado:</span> $valueParam ºF" ;
                echo '<br>';
                echo "<span class='negrito'> Graus Fahrenheit convertido para Graus Celsius:</span> $valueConvertido ºC &nbsp;";
                echo '<iconify-icon icon="meteocons:thermometer-celsius" width="100" height="100"></iconify-icon>';
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