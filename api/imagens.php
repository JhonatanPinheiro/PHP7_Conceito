<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Imagens </div>
    <hr><br>
    <?php
        session_start();

        $arquivos = $_SESSION['arquivos'] ?? [];

        // Onde irei salvar os arquivos
        $pastaUpload = __DIR__ . '/../files/';
        $nomeArquivo = $_FILES['arquivo']['name'];
        $arquivo = $pastaUpload . $nomeArquivo;
        $tmp = $_FILES['arquivo']['tmp_name'];

        if(move_uploaded_file($tmp,$arquivo)){
            echo "<br>Arquivo Válido e Enviado com Sucesso!";

            $arquivos[] = $nomeArquivo;
            $_SESSION['arquivos'] = $arquivos;
        }else{
            echo"<br> Erro no upload de arquivo!";
        }
    ?>

    <form action="#" method="post" enctype="multipart/form-data">
        <input name="arquivo" type="file">
        <button>Enviar</button>
    </form>

    <ul>
    <?php foreach($arquivos as $arquivo): ?>
         <!-- Essa função do php stripos ela irá verificar dentro do arquivo se existe .png e maior que 0-->
        <?php if(stripos($arquivo,'.png') > 0): ?>
            <li>
                <img src="../files/<?= $arquivo ?>"
                    height="50">
            </li>
        <?php endif ?> 
    <?php endforeach ?> 
    </ul>

    <style>
        input.button{
            font-size: 1.2rem;
        }
    </style>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>