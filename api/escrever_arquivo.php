<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Escrevendo Arquivo </div>
    <hr><br>
    <?php

    #Usando o w -> Mesmo o arquivo existindo ou não ele irá criar OU sobrescrever
    #Usando o x -> O arquivo não pode existir. Preciso ser novo
    #Usando o a -> ele irá adicionar mais uma informações no arquivo existente OU novo . Seria um "append"
    #Usando r+ -> Esse modo seria leutura e escrita ao mesmo tempo, ao abrir para ler ele já escreve no momento da leitura. Precisa tomar cuidado pois ele sobrescreve os primeiros caracteres! 
    

    $arquivo = fopen('log/log.txt','w');
    fwrite($arquivo, "Valor inicial\n");
    $str = "Segunda Linha\n";
    fwrite($arquivo,$str);
    fclose($arquivo);

    $arquivo = fopen('log/log2.txt','w');
    fwrite($arquivo, "Novo Conteudo\n");
    fclose($arquivo);

    $arquivo = fopen('log/log.txt','a');
    fwrite($arquivo, "com novos valores \n");
    fwrite($arquivo, "Adicionando em segundo momento \n");
    fclose($arquivo);

    ini_set("display_errors",1);
    $arquivo = fopen('log/log.txt','x');


    #$arquivo = fopen('log/logNOVO.txt','x');
    #fwrite($arquivo, "com novos valores \n");
    #fclose($arquivo);


    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>