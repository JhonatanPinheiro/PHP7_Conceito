<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Erros Personalizados </div>
    <hr><br>
    <?php
    class FaixaEtariaExeption extends Exception{
        public function __construct($message, $code = 0, $previous = null) {
            ##echo "Erro personalizado: $message <br>";
            parent::__construct($message, $code,$previous);
        }
    }

    function calcularTempoAposentadoria($idade){
        if($idade < 18){
            throw new FaixaEtariaExeption("Ainda está muito longe!");
        }
        if($idade > 70){
            throw new FaixaEtariaExeption("Já deveria está aposentado!");
        }

        return 70 - $idade;
    }

    $idadesAvaliadas = [15,30,60,80];
    
    foreach($idadesAvaliadas as $idade){
        try{
            $tempoRestante = calcularTempoAposentadoria($idade);
            echo "Idade:  $idade , $tempoRestante anos restantes! <br>"; 
        }catch(FaixaEtariaExeption $e){
            echo "Não foi possível calcular para $idade anos . <br>";
            echo "Motivo: {$e->getMessage()} <br>";
        }
    }

    echo 'Fim';
 
    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>