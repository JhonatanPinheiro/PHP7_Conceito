<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div class="title"> Desafio - Operadores Lógicos </div>
        <hr><br>
        
        <!-- 
            Dois trabalhos -> terça e quinta
            - Se os dois forem executados -> TV 50 e Sorvete
            - Se apenas um for executado -> Tv 32 e Sorvete
            - Se nenhum for executado -> Fica em casa  
        -->
        <form action="#" method="post">
            <div>
                <label for="t1"> Trabalho 1 (Terça-Feira):</label>
                <select name="t1" id="t1">
                    <option value="NULL"> - </option>
                    <option value="0"> Não Executado </option>
                    <option value="1"> Executado </option>
                </select>
            </div>

            <div>
                <label for="t2"> Trabalho 2 (Quinta-Feira):</label>
                <select name="t2" id="t2">
                    <option value="NULL"> - </option>
                    <option value="0"> Não Executado </option>
                    <option value="1"> Executado </option>
                </select>
            </div>
            <button>Executar</button>
        </form>
        
        <?php
        
        $trabalho1 = $_POST['t1'];
        $trabalho2 = $_POST['t2'];

        if($trabalho1 == 1 && $trabalho2 == 1){
            echo '<ul>
                    <li>TV 50 <iconify-icon icon="f7:tv"></iconify-icon> </li>
                    <li>Sorvete <iconify-icon icon="noto:ice-cream"></iconify-icon> </li>
                  </ul>';
        }else if(($trabalho1 == 1 && $trabalho2 == 0) || ($trabalho1 == 0 && $trabalho2 == 1)){
            echo '<ul>
                    <li>TV 30 <iconify-icon icon="gala:tv"></iconify-icon> </li>
                    <li>Sorvete <iconify-icon icon="noto:ice-cream"></iconify-icon> </li>
                  </ul>
                ';
        }else if ($trabalho1 == 0 && $trabalho2 == 0){
            echo '<p>Ficará em Casa <iconify-icon icon="flat-color-icons:home"></iconify-icon> </p>';
        }else{
            echo '<span>Selecionar os campos acima, conforme as informações!</span>';
        }

        #echo "<br> <br>";
        #echo "{$trabalho1}";
        #echo "{$trabalho2}";
        #echo $_POST['t1'];
        #echo $_POST['t2'];

        ?>
     <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>    
    </body>
   
</html>

<style>
        select{
            font-size: 25px;
            margin: 8px 0px;
        }
        
        button{
            font-size: 25px;
            margin: 15px 0px;
        }
        
        span{
            color: red;
        }
</style>


