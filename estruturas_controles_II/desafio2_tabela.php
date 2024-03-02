<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> Desafio 2 da Tabela </div>
    <hr><br>
    <center>
        <form class="formulario" id="formulario" action="#" method="post">
                <label class="texto-label"> Quantas Colunas: </label>
                <input class="style-input" type="number" id="qtd-coluna" name="qtd-coluna" placeholder="Informe um valor">
                <br>
                <label class="texto-label"> Quantas Linhas: </label>
                <input class="style-input" type="number" id="qtd-linha" name="qtd-linha" placeholder="Informe um valor">
                <hr style="width: 25rem;">
            <button class="botao-criar">Criar</button>
        </form>
    </center>

    <table>
        <?php
            $quantidade_coluna = $_POST['qtd-coluna'];
            $quantidade_linha = $_POST['qtd-linha'];
            echo "<div class='azul'>";
                for($i = 1; $i <= $quantidade_linha; $i++){
                    echo '<tr>';
                    for($j = 1; $j <= $quantidade_coluna; $j++){
                        echo '<td>';
                        echo $k += 1;#echo "{$j}";
                        echo '</td>';
                    }

                    echo'</tr>';
                }
            echo '</div>';
        ?>
    </table>







    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style>
    .formulario {
        padding: 5px;
    }

    .texto-label {
        font-size: 2rem;
        font-weight: bold;
    }

    .style-input{
        font-size: 1.6rem;
        width: 14rem;
    }

    .botao-criar{
       font-size: 1.8rem; 
    }

    td{
        border: 0.3rem solid blue;
        padding: 0.3rem;
    }



</style>