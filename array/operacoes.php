<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div class="title"> Operações com Array </div>
    <hr><br>
    <?php
    
    $dados = [
        "nome" => "Jhonatan",
        "sobrenome" => "Pinheiro",
        "idade" => 24,
        "profissao" => 'Desenvolvedor Full Stack e Administrador de Banco de Dados'
    ];

    $dados2 = [
        "cidade:" => "Sumaré",
        "estado" => "SP"
    ];

    echo '<br>';
    print_r($dados);
    echo '<br>';
    echo '<br>';
    print_r($dados2);
    echo '<br>';
    echo '<br>';
    print_r($dados + $dados2);
    echo '<br>';
    echo '<br>';

    #Essa função diz se essa variavel é um array ou não . Se for retornará 1 caso contrário  retonará nada que será false 
    echo is_array($dados);
    echo '<br>';
    echo '<br>';
    #Essa função traz a quantidade de elementos armazenados dentro do array
    echo count($dados);
    echo '<br>';
    echo '<br>';
    #Essa função traz um elemento que esteje no array, porém será de forma aletório
    $indice = array_rand($dados);
    print_r("<strong>Nome da chave:</strong> ". $indice);
    print_r("<strong> Valor que está na chave: </strong>".$indice = $dados[$indice]);
    echo '<br>';
    echo '<br>';
    #Interpolação ao usar o echo
    echo "{$dados['idade']}";
    echo '<br>';
    echo '<br>';
    #Segunda maneira de Interpolação ao usar o echo (Não é a maneira correta)
    echo "${dados['idade']}";
    echo '<br>';
    echo '<br>';
    #Essa função ela remove a CHAVE do array
    unset($dados["idade"]);
    print_r($dados);
    echo '<br>';
    echo '<br> ---------- <br>';
    #Posso usar também essa função para limpar todas a chaves do array. Lembrando que ele limpará os elementos também (valores)
    unset($dados);
    print_r($dados);
    var_dump($dados);
    echo '<br>';
    echo '<br> ---------- <br>';
    


       

    
    







    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style>

</style>