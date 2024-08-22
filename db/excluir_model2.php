<!DOCTYPE html>
<html>
<head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="title"> Excluir Registros no Banco de Dados #02 </div>
    <br><hr>
    <?php
        require_once "conexao.php";

        $sql = "DELETE FROM cadastro WHERE id IN(10,11,12,13,14,15)";

        $conexao = novaConexao();
        $resultadoDeleteDados = $conexao->query($sql);

        if($resultadoDeleteDados){
            echo "Registro foi excluído do Banco de Dados";
        }else{
            echo "Error: " . $conexao->error;
        }      
    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<style></style>