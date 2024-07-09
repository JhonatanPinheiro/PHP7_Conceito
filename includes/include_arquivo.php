<?php
    echo 'Carregando: include_arquivo<br>';

    $variavel = 'Estou definida';

    if(!function_exists('soma')){
        function soma($a, $b) {
            // Colocando um include dentro da função
            return $a + $b;
        }
    }
 
?>