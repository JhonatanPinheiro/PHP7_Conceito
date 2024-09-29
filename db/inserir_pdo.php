<!DOCTYPE html>
<html>
<head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="title">PDO: Inserindo dados no banco da dados  </div>
    <br><hr>
    <?php
        require_once('conexao_pdo.php');

        $sql = "INSERT INTO `cadastro` (`nome`, `nascimento`, `email`, `site`, `qtd_filhos`, `salario`, `login`, `ip`) 
                VALUES ('Guilherme dos Santos', '1999-06-21', 'guilherme@gmail.com', 'https://guilherme.com.br', 3, 40000, 'guilhermesantosID_11', NULL)";

        $conexao = novaConexao();

        #Esse print_r usando a função get_class_methods usamos para obter uma lista de todos os métodos públicos de uma classe. Ela retorna um array com os nomes dos métodos que podem ser chamados em instâncias dessa classe. Nesse nosso caso iremos conseguir visualizar qual foi o último ID que foi inserido, código do erros, etc...
        print_r(get_class_methods($conexao));

    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<style>

</style>