<!DOCTYPE html>
<html>
<head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="title">PDO: Excluir dados no banco da dados  </div>
    <br><hr>
    <?php
        require_once('conexao_pdo.php');

        $sql = "DELETE FROM cadastro WHERE id = :id";

        $conexao = novaConexao();
    
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':id',$id = 4, PDO::PARAM_INT);

        if($stmt->execute()){
            
            echo "<p class='text-success'>Usuário de código {$id}  Deletado com Sucesso! </p>";
        }else{
            echo "Código: " . $stmt->errorCode();
            print_r($stmt->errorInfo());
        }
  
        $conexao->close();

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