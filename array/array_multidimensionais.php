<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div class="title"> Arrays Multidimensionais </div>
    <hr><br>
    <?php
    $dados = [
        [
            "nome" => "Jhonatan",
            "idade" => 24,
            "naturalidade" => "São Paulo"
        ],

        [
            "nome" => "Layara",
            "idade" => 24,
            "natulidade" => "Bahia"

        ]
    ];

    #Pegando o primeiro o nome elemento do array dados que perte ao array 0 
    echo '<br>';
    echo '<br>';
    print_r($dados);
    echo '<br>' . $dados[0]['nome'];

    #Pegando o primeiro o nome elemento do array dados que perte ao array 1 
    echo '<br>';
    echo '<br>';
    print_r($dados);
    echo '<br>' . $dados[1]['nome'];

    echo '<hr>';
    #Dessa forma estou colocando um nome em cada chave "chave1 e chave2 do array"

    $dados2 = [
        "chave1" => [
            "nome" => "Jhonatan",
            "idade" => 24,
            "naturalidade" => "São Paulo"
        ],

        "chave2" => [
            "nome" => "Layara",
            "idade" => 24,
            "natulidade" => "Bahia"

        ]
    ];

        #Pegando o primeiro o nome elemento do array dados que perte ao array 0 
        echo '<br>';
        echo '<br>';
        print_r($dados2);
        echo '<br>' . $dados2["chave1"]["nome"];
    
        #Pegando o primeiro o nome elemento do array dados que perte ao array 1 
        echo '<br>';
        echo '<br>';
        print_r($dados2);
        echo '<br>' . $dado2["chave2"]["nome"];
       
    echo '<hr>';

    #Adicionando mais um elemento em nosso array
    $dados[] = [
        "nome" => "Eliara",
        "idade" => 36,
        "naturalidade" => "São Paulo"
    ];

    $dados2[] = 
     [
        "nome" => "Eliara",
        "idade" => 36,
        "naturalidade" => "São Paulo"
        
    ];

    echo '<br>';
    echo '<br>';
    echo '<br>' . $dados[2]["nome"];
    echo '<br>';
    echo '<br>';
    echo '<br>' . $dados2["0"]["nome"];
    echo '<br>';
    print_r($dados2);
  
    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style>

</style>