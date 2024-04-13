<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> DESAFIO DE CLASSE DATA </div>
    <hr><br>
    <?php
    class Data
    {
        public int $dia = 1;
        public string $mes = 'Janeiro';
        public int $ano = 1970;

        function apresentarData()
        {
            return "Dia: {$this->dia} / Mês: {$this->mes} / Ano: {$this->ano} <br>";
        }
    }

    $primeiraData = new Data();

    echo $primeiraData->apresentarData();

    $segundaData = new Data();
    $segundaData->dia = 10;
    $segundaData->mes = 04;
    $segundaData->ano = 1988;
    echo $segundaData->apresentarData();

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>