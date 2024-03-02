<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Argumentos e Retorno </div>
    <hr><br>
    <?php
    function obterMensagem(){
        return 'Seja bem vindo (a)';
    }

    obterMensagem();
    $mensagem = obterMensagem();

    echo "{$mensagem}";
    echo '<br>';
    var_dump(obterMensagem());
    echo '<hr>';

    function obterMensagemComNome($nome){
        return "Bem vindo, {$nome}!";
    }

    echo '<br>', obterMensagemComNome('Jhonatan');

    echo '<hr>';

    function soma($a, $b){
        return $a + $b;
    }

    $x = 4;
    $y = 4;

    echo '<br>', soma(5,5);
    echo '<br>', soma($x,$y);

    echo '<hr>';

    function trocarValor($a, $novoValor){
        $a = $novoValor;
    }

    $variavel = 1;
    trocarValor($variavel, 3);
    echo '<br>', $variavel;

    #Tomar cuidado a usar, pois isso fere uns dos paradigmas ! 
    # Ao usar &$ você está passando o endereço 
    function trocarValorDeVerdade(&$a, $novoValor){
        $a = $novoValor;
    }

    trocarValorDeVerdade($variavel, 5000);
    echo '<br>', $variavel;
    
    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>