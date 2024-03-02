<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Desafio Palindroma </div>
    <hr><br>

    <form id='formulario' method="post">
        <label for="nome-coisaI">Nome I | Coisa I: </label>
        <input name="nome-coisaI" id="nome-coisaI" type="text">
        <br>
        <label for="nome-coisaII">Nome II | Coisa II: </label>
        <input name="nome-coisaII" id="nome-coisaII" type="text">
        <br>
        <button type="submit">Consultar</button>
    </form>

    <?php
    #Criar uma função que identifica que uma palavrar é Palindroma.
    # Por exemplo: ana     
    # Se eu inverte a ordem de trás para frente ficará ana
    # Nesse caso ela é uma palavra palindrama

    function verifica_palindramo(){
        $nome_coisaI = $_POST['nome-coisaI'];
        $ultimoIndice = strlen($nome_coisaI) - 1; 

        for($i = 0; $i <= $ultimoIndice; $i++){
            if($nome_coisaI[$i] !== $nome_coisaI[$ultimoIndice - $i]){
                return "<center>Não é Palindramo => {$nome_coisaI}</center>";
            }
        }
        return "<center>Sim é Palindramo => {$nome_coisaI}</center>";
    }

    echo verifica_palindramo();


    echo '<hr>';
    echo '<center> <h3> Segunda maneira </h3> </center>';

    function palindromoSimples(){
        $nome_coisaII = $_POST['nome-coisaII'];

        return $nome_coisaII === strrev($nome_coisaII) ? "<center>Sim é Palindramo => {$nome_coisaII}</center>":"<center>Não é Palindramo => {$nome_coisaII}</center>";
    }

    echo palindromoSimples();

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>