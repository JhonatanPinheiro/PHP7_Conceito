<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> DESAFIO DE CLASSE DATA </div>
    <hr><br>
    <?php
    class Data {
        public $dia;
        public $mes;
        public $ano;

        public function __construct($dia,$mes,$ano){
            $this->dia = $dia;
            $this->mes = $mes;
            $this->ano = $ano;
        }

        public function apresentarData(){
            return "{$this->dia} / {$this->mes} / {$this->ano} <br> <hr>";
        }
    }

    $data1 = new Data('01','10','1980');
    echo  $data1->apresentarData();

    $data1 = new Data('15','04','1971');
    $data1->ano = '2000';
    echo  $data1->apresentarData();

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>