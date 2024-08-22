<!DOCTYPE html>
<html>
<head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="title"> SELECT - Consultar Dados no Banco de Dados  </div>
    <br><hr>
    <?php
        require_once('conexao.php');

        $sql = "SELECT * FROM cadastro";

        $conexao = novaConexao();

        $resultadoTabelaCadastro = $conexao->query($sql);

        //Mostrando na Tela
        $registros = [];

        if($resultadoTabelaCadastro->num_rows > 0){
            while($row = $resultadoTabelaCadastro->fetch_assoc()){
                #Esse fetch_assoc ele é um array associativo. Chave e Valor
                $registros[] = $row;
            }

        }elseif($conexao->error){
            echo "Erro: " . $conexao->error;
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
        font-size: 1.0rem;
    }
</style>