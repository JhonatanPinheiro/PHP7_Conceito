<!DOCTYPE html>
<html>
<head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="title"> Formulário - Cadastro </div>
    <br>
    <form action="#" method="post">
        <div class="form-row">
            <div class="form-group col-md-9">
                <label for="nome"> Nome </label>
                <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : ''?>" 
                       id="nome" name="nome" placeholder="Nome"
                       value="<?= $_POST['nome'] ?>">
                <div class="invalid-feedback">
                    <?=$erros['nome']?>
                </div>
            </div>
            <div class="form-group col-md-9">
                <label for="nascimento"> Nascimento </label>
                <input type="text" class="form-control" id="nascimento" name="nascimento" placeholder="Nascimento"
                       value="<?= $_POST['nascimento']?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email"> E-mail </label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail"
                value="<?= $_POST['email']?>">
            </div>
            <div class="form-group col-md-6">
                <label for="site"> Site </label>
                <input type="text" class="form-control" id="site" name="site" placeholder="Site"
                value="<?= $_POST['site']?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="login"> Login </label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Login"
                value="<?= $_POST['login']?>">
            </div>
            <div class="form-group col-md-6">
                <label for="ip"> IP </label>
                <input type="text" class="form-control" id="ip" name="ip" placeholder="IP Fixo"
                value="<?= $_POST['ip']?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="qtd_filhos"> Quantidade de Filhos </label>
                <input type="number" class="form-control" id="qtd_filhos" name="qtd_filhos" placeholder="Quantidade de Filhos"
                value="<?= $_POST['qtd_filhos']?>">
            </div>
            <div class="form-group col-md-6">
                <label for="salario"> Salário </label>
                <input type="text" class="form-control" id="salario" name="salario" placeholder="Salário"
                value="<?= $_POST['salario']?>">
            </div>
        </div>
        <button class="btn btn-primary btg-lg"> Enviar </button>
        <button class="btn btn-danger btg-lg" name="limpar_dados" value="0"> Limpar Formulário </button> 
    </form>
    <hr>
    <?php
        if(count($_POST) > 0){
            $erros = [];

            // if(isset($_POST['nome']))
            if(!filter_input(INPUT_POST, "nome")){
                    $erros['nome'] = 'Nome é obrigatório';
            }

            // Função filter_input ele está pegando/validando a informação dentro do input do método POST
            if(filter_input(INPUT_POST,"nascimento")){
                    $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
                    if(!$data){
                        $erros['nascimento'] = 'Data no formato inválido! (Dia/Mês/Ano)';
                    }
            }

            if(!filter_input(INPUT_POST,"login")){
                   $erros['login'] = 'PPPOE é obrigatório';
            }
           
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    $erros['email'] = 'Email Inválido! <br>';
            }

            if(!filter_var($_POST['ip'], FILTER_VALIDATE_IP)){
                $erros['ip'] = 'IP no formato Inválido <br>';
            }

            if(!filter_var($_POST['site'],FILTER_VALIDATE_URL)){
                $erros['site'] = 'URL Inválido';
            }
            

            $filhosConfig = ["options" =>
                                ["min_range" => 0, "max_range" => 20]
                            ];
            if(!filter_var($_POST['qtd_filhos'],FILTER_VALIDATE_INT,$filhosConfig) && $_POST['qtd_filhos'] != 0){
               $erros['qtd_filhos'] = 'Quantidade de Filhos Inválida! <br>';
            }

 
            $salarioConfig = ['options' => 
                                ['decimal' => ',']
                            ];
                            
            if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT,$salarioConfig)){
                $erros['salario'] = 'Salário Inválido';
            }
        }
    ?>
    
    <?php foreach($erros as $erro):?>
        <?=""?>
    <?php endforeach ?>

<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<style></style>