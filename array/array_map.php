<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div class="title"> Array com Mapas </div>
    <hr><br>
    <?php
    $lista  = array(1,2,3.4,"texto");

    #Nesse cenário podemos misturar. Por exemplo: Nesse cenário fazendo o array com o map. Podemos misturar ele com apenas o valor. Porém isso não é boa prática. O correto é que se começamos a trabalhar com o array com chave e valor finalizamos ele caso precise ter também apenas o valor o correto é criar um novo array seguindo apenas aquele formato
                   #Chave   Valor
    $dados = array("idade"=> 25,
                   "cor"=>"Azul",
                   "Peso"=> 70.99);
   


    echo $dados["idade"];
    # Para visualizamos o array por inteiro devemos usar a função do print_r . Dessa forma será carregado todo o valor que nosso array está armazenando
    print_r($dados);

    echo '<br>';
    #Não fazer isso pois isso fica muito confuso a misturar de array
    $lista = array(
        "a",
        "chave1"=>'carrego valor da chave1',
        8 => 'teste 8',
        "10" => "teste",
        "a"
    );

    print_r($lista);
    
    echo '<br>'; 
    echo '<br>';
    
    #Caso queira adicionar um valor a mais nesse array
    $lista[] = 'Adicionei um valor nesse array chamado de variável $list';
    print_r($lista);

    echo '<br>'; 
    echo '<br>';
    
    


    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style>

</style>