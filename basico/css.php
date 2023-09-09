<div center class="title">INTEGRAÇÃO CSS</div>
<hr><br>

<h1 class="color-h1">
    <?php
    echo 'Olá';
    echo '<small>';
    echo ' Mundo!';
    echo '</smal>';
    ?>
</h1>
<?= "<div laranja> Outra forma de me 'Expressar'! </div>" ?>
<br>
<div>
    <button dobro> <?= "Legal" ?></button>
</div>

<style>
    button {
        padding: 5px <?= 2 * 10 ?>px;
        background-color: blue;
        color: #fff;
        font-weight: bold;
        border-radius: 10px;
    }

    .color-h1 {
        color: blueviolet;
    }

    /* Criando uma propriedade em CSS */
    [center] {
        display: flex;
        justify-content: center;
    }

    [laranja] {
        color: orangered;
    }

    [dobro] {
        font-size: 2rem;
    }
</style>