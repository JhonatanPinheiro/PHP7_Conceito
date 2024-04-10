<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Desafio Busca Recursiva </div>
    <hr><br>
    <?php
        /*
            $array = [1,2,[3,4,5],6[7,[8,9]],10];

        */
    	
        $array = [1,2, [3,4,5], 6, [7, [8,9]],10];

        function imprimirArray($array, $nivel = '>'){
            foreach($array as $index  => $elemento){
                if(is_array($elemento)){
                    imprimirArray($elemento,$nivel . $nivel[0]);
                }else{
                    echo "$nivel $elemento <br>";
                }
            }
        };



        imprimirArray($array);
       #imprimirArray($array, '#');






     

    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style></style>