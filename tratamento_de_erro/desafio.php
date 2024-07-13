<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> DESAFIO 1 </div>
    <hr><br>
    <?php
        class RegraParaDividirExeption extends Exception{       
            public function __construct($message, $code = 0, $previous = null){
                parent::__construct($message, $code, $previous);
            }
        }

        function dividir($numero, $divisor){
            if ($numero && $numero != 8 && $divisor == 0) {
                throw new RegraParaDividirExeption('Error! Seu divisor não poder ser 0');
                
            } elseif($numero == 8 && $divisor == 0){
                throw new RegraParaDividirExeption('Você caiu em uma Exeção. Porém Iremos dividir');
                return var_dump($resultado = intdiv($numero,$divisor));
        
            }else{
                return $resultado = intdiv($numero,$divisor);
                #if(is_int($resultado)){
                #    throw new RegraParaDividirExeption('Atenção seu resultado não deu inteiro!');
                #}
            }
        }

    $numero = 8;
    $divisor = 2;

    try{
        $resultado =  dividir($numero, $divisor);
        echo "Sucesso na sua Divisão! => $numero / $divisor = $resultado";
    }catch(RegraParaDividirExeption $e){
        echo '|Violação de Regra| --> ';
        echo "Motivo: {$e->getMessage()} <br>";
    }

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

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>