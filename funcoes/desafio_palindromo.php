<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Desafio Palindroma </div>
    <hr><br>

    <form id='formulario' method="post">
        <label for="nome-coisa">Nome | Coisa: </label>
        <input name="nome-coisa" id="nome-coisa" type="text">

        <button type="submit">Consultar</button>
    </form>

    <?php
    #Criar uma função que identifica que uma palavrar é Palindroma.
    # Por exemplo: ana     
    # Se eu inverte a ordem de trás para frente ficará ana
    # Nesse caso ela é uma palavra palindrama

  
    
    
    function verifica_palindramo(){
        $nome_coisa = $_POST['nome-coisa'];
        $ultimoIndice = strlen($nome_coisa) - 1; 

        for($i = 0; $i <= $ultimoIndice; $i++){
            if($nome_coisa[$i] !== $nome_coisa[$ultimoIndice - $i]){
                return "<center>Não é Palindramo => {$nome_coisa}</center>";
            }
        }
        return "<center>Sim é Palindramo => {$nome_coisa}</center>";
    }

    echo verifica_palindramo();



            





    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>