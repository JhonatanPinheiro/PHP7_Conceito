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

   
    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style>
    form>* {
        font-size: 1.8rem;
    }
</style>