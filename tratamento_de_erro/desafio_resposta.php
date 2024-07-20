<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> DESAFIO 1 - RESPOSTA </div>
    <hr><br>
    <?php
    include_once ('desafio_resposta_complemento.php');
    use function \Aritmeticas\intdiv;

    echo "
    <h2> Descrição do Desafio </h2>
    <h3>Sobrescrever o método intdiv para... </h3>
    <p> -> Lançar uma exeção quando tentar dividir por zero </p>
    <p> -> Lançar uma exeção quando o resultado não for inteiro </p>
    <p> -> Dividir normamelte nos demais casos </p>

    <h3>Os teste... </h3>
    <p> -> intdiv com os parametros 8 e 2 [Sucesso]  </p>
    <p> -> intdiv com os parametros 8 e 3 [Sucesso]  </p>
    <p> -> intdiv com os parametros 8 e 0 [Sucesso]  </p>
    <p> -> intdiv 'original' com os parametros 8 e 3 [Sucesso] </p>    
    ";


    
    try {
        echo intdiv(0,1) . '<br>';
    }catch(\Aritmeticas\NaoInteiroException $e){
        echo 'O Resultado não é um número inteiro <br>';
    }
 
   

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>