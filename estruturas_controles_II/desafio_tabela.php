<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title">  Desafio da Tabela </div>
    <hr><br>
    <?php
     
    $matriz = [ 
                ['01','02','03','04','05'],
                ['06','07','08','09','10'],
                ['11','12','13','14','15'], 
                ['16','17','18','19','20'],
    ];

    foreach($matriz as $linha){
        foreach($linha as $valor){
            echo "$valor ";
        }
        echo "<br>";
    }   
    ?>

    <hr>

    <table>
        <?php
            foreach($matriz as $linha){
                echo '<tr>';
                foreach($linha as $valor){
                    echo "<td>$valor</td>";
                }
                echo '</tr>';
            }
        ?>
    </table>

    <hr>

    <table>
    <?php
        foreach($matriz as $index => $linha){
            $style = $index % 2 === 1 ? 'background-color: lightblue;' :  '';
            echo "<tr style='{$style}'>";
            
            foreach($linha as $valor){
                echo "<td>$valor</td>"; 
            }
            echo '</tr>';      
        } 
    ?>
    </table>

    





<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }


</style>