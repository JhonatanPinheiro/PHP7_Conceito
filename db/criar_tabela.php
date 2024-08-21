<!DOCTYPE html>
<html>
<head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="title"> Criando Tabela  </div>
    <br><hr>
    <?php
        require_once "conexao.php";
        // DDL - Data Definition Lang
        $sql = "CREATE TABLE IF NOT EXISTS `cadastro` (
            `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            `nome` VARCHAR(100) NOT NULL,
            `nascimento` DATE,
            `email` VARCHAR(100) NOT NULL,
            `site` VARCHAR(100),
            `qtd_filhos` INT,
            `salario` FLOAT,
            `login` VARCHAR(100) NOT NULL UNIQUE,
            `ip` VARCHAR(100)
        )";
      
        $conexao = novaConexao();
        $resultado = $conexao->query($sql);

        if($resultado){
            echo "Tabela Criada com Sucesso!";
        }else{
            echo "Error!" . $conexao->error;
        }

        $conexao->close();

    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<style></style>