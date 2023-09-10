<div class="title">
    <h1> Desafio 01 - </h1>
</div>
<hr> <br>
<ul>
    <h2 titulo>Primeira maneira </h2>
    <li>1 + 1 = <?= "2" ?></li>
    <li>4 + 4 = <?= "8" ?></li>
    <li>8 + 8 = <?= "16" ?></li>
    <br>

    <h2 titulo>Segunda maneira</h2>
    <li>1 + 1 = <?= 1 + 1 ?></li>
    <li>4 + 4 = <?= 4 + 4 ?></li>
    <li>8 + 8 = <?= 8 + 8 ?></li>
    <br>

    <h2 titulo>Terceira maneira</h2>
    <li><?= '1 + 1 = ' . 1 + 1 ?></li>
    <li><?= '4 + 4 = ' . 4 + 4 ?></li>
    <li><?= '8 + 8 = ' . 8 + 8 ?></li>
    <br>

    <h2 titulo>Quarta maneira</h2>
    <li>1 + 1 = <?php echo '2' ?></li>
    <li>4 + 4 = <?php echo '8' ?></li>
    <li>8 + 8 = <?php echo '16' ?></li>
</ul>

<style>
    [titulo] {
        color: red;
    }
</style>