<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Recursividade </div>
    <hr><br>
    <?php
    /*
        7! = 5040
            => 7 * 6!    
                => 6 * 5!    
                    => 5 * 4!    
                            => 4 * 3!    
                                    => 3 * 2!
                                        => 2 * 1!        
                                                => 1 //condição de Parada !! */
        /* 4a1
                => 4 + 3a1
                            => 3 + 2a1
                                        => 2 + 1a1
                                                     =>   1 //Condição de Parada!!!*/
    
    ################################    
    ######Primeira maneira de FAZER 
    ################################   

    function somaUmAteI($numero){
        $soma = 0;

        for(; $numero >= 1 ; $numero--){
            $soma += $numero;
        }

        return $soma;
    }

    echo somaUmAteI(4) . "<br>";

    ################################    
    ######Segunda maneira de FAZER 
    ################################   

    function somaUmAteII($numero){
        $soma = 0;

        for($i = 1; $i <= $numero; $i++){
            $soma += $i;
        }

        return $soma;
    }

    echo somaUmAteII(4) . "<br>";



    ##############################Trabalhando com soma Recursiva######################
    echo "<hr>";

    function somaRecursivaUmAte($numero){
        //condição de parada
        if($numero === 1){
            return 1;
        }
        return  $numero + somaRecursivaUmAte($numero - 1);
    }

    echo somaRecursivaUmAte(4).'<br>';

    echo "<hr>";

    function somaRecursivaEconomica($numero){
        return $numero === 1 ? 1 : ($numero + somaRecursivaEconomica($numero - 1)) ;
    }

    echo somaRecursivaEconomica(4);


    
        


    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>