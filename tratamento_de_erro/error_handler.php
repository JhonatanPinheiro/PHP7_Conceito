<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Error Handler - Gerenciador  </div>
    <hr><br>
    <?php
    #ini_set('display_errors',1); #Comando para mostrar erros e advertências

    #Para ignorar as advertencias e usar apenas para monstrar os erros usamos esse comando
    error_reporting(E_ERROR); # Esse comando conseguimos definir oque queremos que mostre

    error_reporting(E_ALL); #Comando para APONTAR TODOS os erros + Advertência

    #error_reporting(~E_ALL); #Comando para NÃO MOSTRAR os erros + Advertências
 
    #error_reporting(E_ERROR);

    function filtrarMensagem($erro, $erroString){
        $text = 'include';
        #$text = 'by zero';

        return !!stripos(" $erroString", $text);
    }
   
    set_error_handler('filtrarMensagem', E_WARNING);

    echo '<hr>';
    echo  4 / 0 . '<br>';
    include 'arquivo_inexistente.php';
    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>