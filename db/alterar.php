<!DOCTYPE html>
<html>
<head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="title"> Alterar dados no Banco de Dados</div>
    <br><hr>
    <?php
        require_once "conexao.php";
        $conexao = novaConexao();

        if($_GET['codigo']){
            $sql = "SELECT * FROM cadastro WHERE id = ?";
            $stmt = $conexao->prepare($sql);
            $stmt->bind_param("i", $_GET['codigo']);

            if($stmt->execute()){
                $resultado = $stmt->get_result();
                if($resultado->num_rows > 0){
                    $dados = $resultado->fetch_assoc();
                
                    if($dados['nascimento']){
                        $dt = new DateTime($dados['nascimento']);
                        $dados['nascimento'] = $dt->format('d/m/Y');
                    }
                    
                    if($dados['salario']){
                        $dados['salario'] = str_replace('.',',', $dados['salario']);
                    }
                }
            }  
        }
        
        if(count($_POST) > 0){
            $dados = $_POST;
            $erros = [];

            // if(isset($_POST['nome']))
            if(trim($dados['nome']) === ""){
                    $erros['nome'] = 'Nome é obrigatório';
            }

            // Função filter_input ele está pegando/validando a informação dentro do input do método POST
            if(isset($dados['nascimento'])){
                    $data = DateTime::createFromFormat('d/m/Y', $dados['nascimento']);
                    if(!$data){
                        $erros['nascimento'] = 'Data no formato inválido! (Dia/Mês/Ano)';
                    }
            }

            if(!filter_input(INPUT_POST,"login")){
                    $erros['login'] = 'PPPOE é obrigatório';
            }
            
            if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)){
                    $erros['email'] = 'Email Inválido! <br>';
            }

            if(!filter_var($dados['ip'], FILTER_VALIDATE_IP)){
                $erros['ip'] = 'IP no formato Inválido <br>';
            }

            if(!filter_var($dados['site'],FILTER_VALIDATE_URL)){
                $erros['site'] = 'URL Inválido';
            }
            

            $filhosConfig = ["options" =>
                                ["min_range" => 0, "max_range" => 20]
                            ];
            if(!filter_var($dados['qtd_filhos'],FILTER_VALIDATE_INT,$filhosConfig) && $dados['qtd_filhos'] != 0){
                $erros['qtd_filhos'] = 'Quantidade de Filhos Inválida! <br>';
            }


            $salarioConfig = ['options' => 
                                ['decimal' => ',']
                            ];
                            
            if(!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT,$salarioConfig)){
                $erros['salario'] = 'Salário Inválido';
            }

            if(!count($erros)){

                $sql = "UPDATE `cadastro` SET `nome` = ?, 
                                              `nascimento` = ?,
                                               `email` = ?, 
                                               `site` = ?,
                                               `qtd_filhos` = ?, 
                                               `salario` = ?, 
                                               `login` = ?,
                                               `ip` = ? 
                        WHERE id = ?";
                
                $stmt = $conexao->prepare($sql);

                $params = [
                    $dados['nome'],
                    $data ? $data->format('Y-m-d') : NULL,
                    $dados['email'],
                    $dados['site'],
                    $dados['qtd_filhos'],
                    $dados['salario'] ? str_replace(',','.', $dados['salario']) : NULL,
                    $dados['login'],
                    $dados['ip'],
                    $dados['id'],
                ];

                #Preciso definir os tipos premitivos que está no INSERT refente a cada campo. s=string, d=decimal e i=inteiro
                $stmt->bind_param("ssssidssi", ...$params);
                
                if($stmt->execute()){
                    echo "<br><span class='msg-sucesso'>Registro de código: $dados[id] atualizado com Sucesso!</span><br>";  
                    unset($dados);
                }
            }
        }
    ?>

    <?php foreach($erros as $erro): ?>
        <div class="alert alert-danger" role="alert">
            <?= $erro ?>
        </div>
    <?php endforeach?>

    <form action="/exercicio.php" method="get">
        <input type="hidden" name="dir" value="db">
        <input type="hidden" name="file" value="alterar">
        <div class="form-group row">
            <div class="col-sm-2">
                <input type="number" name="codigo" class="form-control" value="<?=$_GET['codigo']?>" placeholder="Código para consultar">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">
                <button class="btn btn-success mb-2">Consultar</button>
            </div>
        </div>
    </form>
    
    <form action="#" method="post">
        <input type="hidden" name="id" value="<?= $dados['id']?>">
        <div class="form-row">
            <div class="form-group col-md-9">
                <label for="nome"> Nome </label>
                <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : 'is-valid'?>" 
                       id="nome" name="nome" placeholder="Nome"
                       value="<?= $dados['nome'] ?>">
                <div class="invalid-feedback">
                    <?=$erros['nome']?>
                </div>
            </div>
            <div class="form-group col-md-9">
                <label for="nascimento"> Nascimento </label>
                <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid':'is-valid'?>" 
                       id="nascimento" name="nascimento" placeholder="Nascimento"
                       value="<?= $dados['nascimento']?>">
                <div class="invalid-feedback">
                    <?=$erros['nascimento']?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email"> E-mail </label>
                <input type="email" class="form-control <?= $erros['email'] ? 'is-invalid':'is-valid'?>"
                       id="email" name="email" placeholder="E-mail"
                       value="<?= $dados['email']?>">
                <div class="invalid-feedback">
                    <?=$erros['email']?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="site"> Site </label>
                <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid': 'is-valid'?>"
                       id="site" name="site" placeholder="Site"
                       value="<?= $dados['site']?>">
                <div class="invalid-feedback">
                    <?=$erros['site']?>
                </div>   
            </div>    
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="login"> Login </label>
                <input type="text" class="form-control <?= $erros['login'] ? 'is-invalid': 'is-valid'?>"
                       id="login" name="login" placeholder="Login"
                       value="<?= $dados['login']?>">
                <div class="invalid-feedback">
                    <?=$erros['login']?>
                </div>  
            </div>
            <div class="form-group col-md-6">
                <label for="ip"> IP </label>
                <input type="text" class="form-control <?= $erros['ip'] ? 'is-invalid': 'is-valid'?>"
                       id="ip" name="ip" placeholder="IP Fixo"
                       value="<?= $dados['ip']?>">
                <div class="invalid-feedback">
                    <?=$erros['ip']?>
                </div>  
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="qtd_filhos"> Quantidade de Filhos </label>
                <input type="number" class="form-control <?= $erros['qtd_filhos'] ? 'is-invalid': 'is-valid'?>"
                       id="qtd_filhos" name="qtd_filhos" placeholder="Quantidade de Filhos"
                       value="<?= $dados['qtd_filhos']?>">
                <div class="invalid-feedback">
                    <?=$erros['qtd_filhos']?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="salario"> Salário </label>
                <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid': 'is-valid'?>"
                       id="salario" name="salario" placeholder="Salário"
                       value="<?= $dados['salario']?>">
                <div class="invalid-feedback">
                    <?=$erros['salario']?>
                </div> 
            </div>
        </div>
        <button class="btn btn-success btg-lg"> Atualizar Dados </button>
        <button class="btn btn-danger btg-lg" name="limpar_dados" value="0"> Limpar Formulário </button> 
    </form>

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