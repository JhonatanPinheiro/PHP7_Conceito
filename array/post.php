<!DOCTYPE html>
<html>

<head></head>

<body>
    <div class="title"> Usando $_POST </div>
    <hr><br>

    <form action="#" method="post">
        <input type="text" name="name">    
        <input type="text" name="sobrenome">    
        <select name="estado">
            <option value="BH">Bahia</option>
            <option value="SP">São Paulo</option>
        </select>
        <button>Enviar</button>
    </form>
    
    <?php
        print_r($_POST);
         echo '<br>' .count($_POST);
    ?>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>

<style>
    form > *{
        font-size: 1.8rem;
    }

</style>