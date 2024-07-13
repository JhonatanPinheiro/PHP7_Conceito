<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Try / Catch </div>
    <hr><br>
    <?php
        $valor_divisao = (7 / 0.1);
        var_dump($valor_divisao);
        
        echo '<hr>';
    /*
        #É uma tratativa para um erro 
        try{
            echo intdiv(7,0);
        } catch(Error $e){
            echo 'Erro 1. Você não pode dividir 7 / 0 <br>';
        }

        echo intdiv(7,0) ."<br> <hr>";
*/
        #Usamos geralmente quando algo viola a regra.
        try{
            throw new Exception("Um erro de Violação aconteceu . Entre em contato com o suporte de nosso sistema!");
            echo intdiv(7,0);
        } catch(DivisionByZeroError $e){
            echo 'Divisão por zero <br>';
        } catch(Throwable $e){
            echo 'Erro encontrado' . $e->getMessage() . '<br>';
        } finally{
            echo 'Sempre Executado! <br>';
        }

        #Thron new Exection 
        #CATCH
        #Finally

        #Em PHP, try, catch, e finally são estruturas usadas para lidar com exceções, que são erros ou situações inesperadas que podem ocorrer durante a execução de um programa. Aqui está uma explicação simples de cada uma e quando usá-las:
            #try: É usado para envolver o código que pode gerar uma exceção. Quando o código dentro do bloco try lança uma exceção, o PHP para sua execução normal e procura por um bloco catch correspondente.
                    # try {
                    #     // Código que pode gerar uma exceção
                    # }
            #Quando usar: Sempre que você estiver executando um código que possa gerar erros ou exceções (por exemplo, operações com arquivos, conexões de banco de dados, etc.), você deve envolver esse código em um bloco try.

            #catch: É usado para capturar exceções lançadas pelo bloco try correspondente. Você pode especificar o tipo de exceção que deseja capturar entre parênteses logo após catch.
                    # catch (Exception $e) {
                    #     // Código para lidar com a exceção
                    # }
            #Quando usar: Após um bloco try, você deve usar um ou mais blocos catch para tratar exceções específicas ou genéricas que podem ocorrer durante a execução do código no bloco try.

            #finally: É usado para definir um bloco de código que será executado, independentemente de ter ocorrido ou não uma exceção no bloco try. O código no bloco finally será executado após o bloco try (e qualquer bloco catch correspondente), independentemente de uma exceção ter sido lançada ou não.
                    # finally {
                    #     // Código que sempre será executado
                    # }
            #Quando usar: O bloco finally é útil quando você precisa garantir que determinado código seja executado, como fechar conexões de banco de dados, liberar recursos, ou realizar ações de limpeza, independentemente de uma exceção ter ocorrido ou não.

            /*

            Exemplo de uso:
            
                    try {
                            // Abrir um arquivo
                            $file = fopen('file.txt', 'r');
                            
                            // Ler o conteúdo do arquivo
                            fread($file, filesize('file.txt'));
            
                            // Fechar o arquivo
                            fclose($file);

                    } catch (Exception $e) {
                        // Tratar a exceção, se ocorrer
                        echo 'Ocorreu um erro: ' . $e->getMessage();
                    } finally {
                        // Garantir que o arquivo seja sempre fechado, mesmo se ocorrer uma exceção
                        if (isset($file)) {
                            fclose($file);
                        }
                    }
       
                    
        **************
        Neste exemplo:
        **************

        O bloco try envolve o código que abre, lê e fecha um arquivo.
        O bloco catch captura e trata qualquer exceção que possa ocorrer durante a operação do arquivo.
        O bloco finally garante que o arquivo seja fechado, independentemente de ocorrer uma exceção ou não.
        Essas estruturas são fundamentais para o tratamento de exceções em PHP, ajudando a garantir a robustez e confiabilidade dos seus scripts, especialmente em situações onde o comportamento inesperado pode ocorrer.
                    
        */

        echo 'Execução continua!... ';
    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>