<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Upload do Arquivo </div>
    <hr><br>
    <?php
    print_r($_FILES); # As variaveis abaixo estou pegando informações desse array. Que é nescessário para execução desse processo de upload
    echo '<hr>';
    #echo '<br>';
    #print_r($_POST);
    #echo '<br>';
    #print_r($_GET);

    if($_FILES && $_FILES['arquivo']){
        $pastaUpload = 'A:/jhonatan/';
        $nomeArquivo = $_FILES['arquivo']['name'];
        $arquivo = $pastaUpload.$nomeArquivo;
        $tmp = $_FILES['arquivo']['tmp_name'];

        if(move_uploaded_file($tmp,$arquivo)){
            echo "<p 
                    class='sucesso'> Arquivo válido e enviado com sucesso! 
                    <br> 
                    <span class='text'>Caminho:</span> <span class='caminho'>{$arquivo}</span>  
                    </p> <br>";
        }else{
            echo "<p class='error'>Error no upload do arquivo! </p> <br>";
        }
    }

    echo '<hr>';
    ?>
    <form action='#' method="post" enctype="multipart/form-data">
        <input name="arquivo" type="file">
        <br>
        <button>Enviar</button>
    </form>

<style>
    input, button{
        font-size: 1.2rem;
    }
    .sucesso{
        color: green;
        font-weight: 900;
    }
    .error{
        color: red;
        font-weight: 900;
        background: #000;
    }
    .text{
        color: #000;
        font-weight: 900;
    }
    .caminho{
        color: blue;
        font-weight: 900;
    }
</style>

<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>