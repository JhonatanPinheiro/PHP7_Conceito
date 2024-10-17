<!DOCTYPE html>
<html>
<head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="title"> Alterar dados usando PDO</div>
    <br><hr>
    <?php
        require_once "conexao_pdo.php";
        $conexao = novaConexao();

        $sql = "UPDATE `cadastro` SET  `nome`= ?,
                                       `nascimento`= ?, 
                                       `email`= ?, 
                                       `site`= ?,
                                       `qtd_filhos`= ?, 
                                       `salario`= ?, 
                                       `login`= ?, 
                                       `ip`= ? 
                                        WHERE `id`= ?";
        
        $conexao = novaConexao();
        $stmt = $conexao->prepare($sql);

        $resultado = $stmt->execute([
            'Gui', 
            '1980-12-12',
            'gui@uou.com.br',
            'https://guilhermetestenet.com.br',
            8,
            7800,
            'gui0162',
            '192.168.701.01',
            25
        ]);

    if($resultado){
        echo "<br><span class='msg-sucesso'>Editado com Sucesso!</span><br>";  
    }else{
        print_r($stmt->errorInfo());
    }

    ?>

<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<style>
    .msg-sucesso{
        font-weight: 900;
        font-size: 28px;
        color: green;
    }
</style>