<!DOCTYPE html>
<html>
<head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="title"> Inserir dados no Banco de Dados #01</div>
    <br><hr>
    <?php
        require_once "conexao.php";

        $sql = "INSERT INTO cadastro 
                (nome,nascimento,email,site,qtd_filhos,salario,`login`)
                VALUES 
                ('Mariet','1999-10-30','mariet@gmail.com','https://marietadba.com.br',2,'5000','marietID_456')";
        
        $conexao = novaConexao();
        $resultado = $conexao->query($sql);

        if($resultado){
            echo "Sucesso! Foi inserido na Base de Dados a informação...";
        }else{
            echo "Erro: " . $conexao->error;
        }

        $conexao->close();

    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<style></style>