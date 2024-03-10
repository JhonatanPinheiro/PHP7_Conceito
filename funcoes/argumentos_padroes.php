<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title">Argumentos Padrões </div>
    <hr><br>
    <?php
     function saudacao($nome = 'Senhor (a)', $sobrenome = 'Cliente'){
        return "Bem vindo, $nome $sobrenome! <br>";
     }

     echo saudacao();
     echo saudacao(NULL);
     echo saudacao(NULL,NULL);
     echo saudacao('Mestre', 'Supremo');

     echo '<hr>';

     function anotarPedido($comida, $bebida = 'Água'){
        return "Para comer: $comida <br>"  . "Para beber: $bebida <br>";
     }

     echo anotarPedido('Hamburguer');



     #DICA: Sempre que tivermos trabalhando com valores padrões é muito importante deixar eles passando por último. Pois dessa formar ao chamar-mos a função não precisamos ficar passando o valor das variáveis nos parâmetros

    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>