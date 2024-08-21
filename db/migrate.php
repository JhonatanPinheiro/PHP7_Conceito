<!DOCTYPE html>
<html>
<head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="title"> Disparando o Migrate </div>
    <br><hr>
    <?php
        require_once "conexao.php";

        $conexao = novaConexao(NULL);

        #DROP DATABASE IF EXISTS
        $sql = 'DROP DATABASE IF EXISTS curso_php';

        $resultadoApagarBancoDeDadosExistentes = $conexao->query($sql);

        
        #CREATE DATABASE
        $sql = 'CREATE DATABASE curso_php';

        $resultadoBancoDeDados = $conexao->query($sql);

        #CREATE TABLE
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
        $resultadoTabelas = $conexao->query($sql);


        #INSERT
        $sql = "INSERT INTO cadastro 
        (nome,nascimento,email,site,qtd_filhos,salario,`login`)
        VALUES 
        ('Mariet','1999-10-30','mariet@gmail.com','https://marietadba.com.br',2,'5000','marietID_456')";

        $conexao = novaConexao();
        $resultadoDoInsert = $conexao->query($sql);


        #CONDIÇÕES IF E ELSE
        if($resultadoApagarBancoDeDadosExistentes){
            echo "<strong>Banco de Dados</strong> <span class='msg-sucesso'>Deletado com Sucesso,pois já existia!</span> <br>";
        }else{
            echo "<span class='msg-error'>Erro: </span>" . $conexao->error;
        }

        if($resultadoBancoDeDados){
            echo "<strong>Banco de Dados</strong> <span class='msg-sucesso'>criado com Sucesso!</span> <br>";
        }else{
            echo "<span class='msg-error'>Erro: </span>" . $conexao->error;
        }

        if($resultadoTabelas){
            echo "<strong>Tabela</strong> <span class='msg-sucesso'>Criada com Sucesso!</span> <br>";
        }else{
            echo "<span class='msg-error'>Erro: </span>" . $conexao->error;
        }

        if($resultadoDoInsert){
            echo "<span class='msg-sucesso'>Foi</span> <strong>inserido os dados</strong><span class='msg-sucesso'> na Base de Dados com Sucesso! </span'><br>";
        }else{
            echo "<span class='msg-error'>Erro: </span>" . $conexao->error;
        }

        $conexao->close();
    ?>  
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
    .msg-sucesso{
        color: green;
    }
    .msg-error{
        color: red;
    }
</style>
</body>
</html>

