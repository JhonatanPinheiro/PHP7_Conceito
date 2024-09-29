<!DOCTYPE html>
<html>
<head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="title">PDO: Consultar dados no banco da dados  </div>
    <br><hr>
    <?php
        require_once('conexao_pdo.php');

        $conexao = novaConexao();
        $sql = "SELECT * FROM `cadastro`";
        # $resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_NUM); #Retorno Formato de número
         $resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC); #Retorno Formato de Associativo
        # $resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_CLASS); #Retorno Formato de  Classe
        # $resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_BOTH); #Retorno Formato de  Associativo e também o formato de número
        #-----------------------------------Usando o fetch (irá pegar apenas um registros). Usando o fetchAll irá pegar todos os registros

        #print_r($resultado);
        #echo "<hr>";

        $sql = "SELECT * FROM cadastro LIMIT :qtd OFFSET :inicio";
        $stmt = $conexao->prepare($sql);

        $stmt->bindValue(':qtd', 2, PDO::PARAM_INT);
        $stmt->bindValue(':inicio', 3, PDO::PARAM_INT);

        # print_r(get_class_methods($stmt));

        if($stmt->execute()){
            $resultado = $stmt->fetchAll();
            print_r($resultado);
        }else{
            echo "Código: " . $stmt->errorCode();
            print_r($stmt->errorInfo());
        }

        echo "<hr>";

        #$sql = "SELECT * FROM cadastro WHERE id = ?";
        $sql = "SELECT * FROM cadastro WHERE id = :id";

        $stmt = $conexao->prepare($sql);

        $stmt->bindValue(':id', 1, PDO::PARAM_INT);

        ##if($stmt->execute([1])){
        if($stmt->execute()){
            $resultado = $stmt->fetch();
            print_r($resultado);
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