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

        $registros = [];
        $conexao = novaConexao();

        if($_GET['excluir']){
            $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
            #Ele vai ler esse valor e não vai deixar um valor inválido seja enviado. Impedindo que tenho problema de ataque SQL INJECÇÂO
            $stmt = $conexao->prepare($excluirSQL);
            $stmt->bind_param("i",$_GET['excluir']);
            $stmt->execute();
        }
    
        $sql = "SELECT * FROM cadastro";
        $resultado = $conexao->query($sql);

        if($resultado->num_rows > 0){
            while($row = $resultado->fetch_assoc()){
                $registros[] = $row;
            }
        }elseif($conexao->error){
            echo 'Error: '. $conexao->error;
        }

        $conexao->close();
    ?>

    <table class="table table-hover table-striped table-bordered">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Nascimento</th>
            <th>Email</th>
            <th>Site</th>
            <th>Qtd_filhos</th>
            <th>Salario</th>
            <th>Login</th>
            <th>Ip</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php foreach($registros as $registro):?>
                <tr>
                    <td><?= $registro['id'] ?></td>  
                    <td><?= $registro['nome'] ?></td>

                    <!-- Estou formatando a date para formato br DD/MM/YYYY, usando strtotime -->
                    <td>
                        <?= DATE('d/m/Y', strtotime($registro['nascimento'])) ?>
                    </td>  
                  
                    <td><?= $registro['email'] ?></td>  
                    <td><?= $registro['site'] ?></td>  
                    <td><?= $registro['qtd_filhos'] ?></td>  
                    <td><?= $registro['salario'] ?></td>  
                    <td><?= $registro['login'] ?></td>  
                    <td><?= $registro['ip'] ?></td>  
                    <td>
                        <a href="/exercicio.php?dir=db&file=excluir_model2&excluir=<?= $registro['id'] ?>" class="btn btn-danger"> Excluir </a>
                    </td>  
                </tr>
            <?php endforeach?>
        </tbody>
    </table>



<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<style>
    table > * {
        font-size: 1rem;
    }

</style>