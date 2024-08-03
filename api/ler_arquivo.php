<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Escrevendo Arquivo </div>
    <hr><br>
    <?php

    #Usando o r -> ele irá aler o arquivo
    #Usando o w -> Mesmo o arquivo existindo ou não ele irá criar OU sobrescrever
    #Usando o x -> O arquivo não pode existir. Preciso ser novo
    #Usando o a -> ele irá adicionar mais uma informações no arquivo existente OU novo . Seria um "append"


    #Usando o r -> ele irá aler o arquivo
    $arquivo = fopen('log/log.txt','r');
    echo fread($arquivo, 255); #Estou lendo o arquivo utilizando as quantidade por byte que desejamos mostrar ... 
    fclose($arquivo);

    echo '<hr>';
    $arquivo = fopen('log/texto_ipson.txt','r');
    
    #################Primeira maneira###################
    #echo fread($arquivo, filesize('log/texto_ipson.txt')); // Dessa forma estou pedindo para ele ler o texto todo. O tamanho completo do arquivo
    #fclose($arquivo);

    #################Segunda maneira####################
    #$tamanho_arquivo_inteiro = filesize('log/texto_ipson.txt'); // Dessa forma estou pedindo para ele ler o texto todo. O tamanho completo do arquivo porém estou salvando em uma váriavel
    #echo fread($arquivo,$tamanho_arquivo_inteiro);
    #fclose($arquivo);

    #################Terceira maneira###################
    #->Lendo o arquivo linha por linha
    /*echo fgets($arquivo);
    echo fgets($arquivo);
    echo fgets($arquivo);
    echo fgets($arquivo);
    echo fgets($arquivo);
    #echo fgets($arquivo);
    #echo fgets($arquivo);
    #echo fgets($arquivo);
    fclose($arquivo);*/


    #####################Quarta Maneira#################
    #Percorrendo todas as linhas do arquivo
    /*
    $arquivo = fopen('log/texto_ipson.txt','r');
    while(!feof($arquivo)){ #Enquanto ele não chegar ao final do arquivo irá executar oque está dentro do while
        echo fgets($arquivo), '<br>'; #Mostrará o arquivo completo
        #echo fgetc($arquivo) , '<br>'; #Mostrará o arquivo completo porém por letras
    }
    fclose($arquivo);
    */

    #####################Quinta Maneira#################
  
    $arquivo = fopen("log/texto_ipson.txt","w");
    fwrite($arquivo, "  What is Lorem Ipsum?
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley 
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 
                        1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum. #FIM DO ARQUIVO
            ");
    fclose($arquivo);
    
    $arquivo = fopen("log/texto_ipson.txt","r");
    echo fgets($arquivo), '<br>';
    echo fgets($arquivo), '<br>';
    echo fgets($arquivo), '<br>';
    echo fgets($arquivo), '<br>';
    echo fgets($arquivo), '<br>';
    echo fgets($arquivo), '<br>';
    echo fgets($arquivo), '<br>';
    fclose($arquivo);

     #r+ -> Esse modo seria leutura e escrita ao mesmo tempo, ao abrir para ler ele já escreve no momento da leitura. Precisa tomar cuidado pois ele sobrescreve os primeiros caracteres! 
    $arquivo = fopen("log/texto_ipson.txt","r+");
    fwrite($arquivo,"______________GRAVADO DURANTE A LEITURA DO ARQUIVO____________");
    echo '<hr>';
    
    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>