<div class="titulo">Desafio - precedência</div>


<?php
echo '<p>1. Qual valor será impresso?</p>';
//echo 2 + 5 * 4 + (12 / 6) / (-8 + 2 ** 3);
echo '<p>A expressão da ero pois não é possível divisão por zero</p>';
echo '<br>';

echo '<p>2. Qual expressão imprime o valor 100?</p>';
echo 'a)', (1 + 2) * 20 - 15;
echo '<br>';
echo '<p class="correto"> b)', 4 * 5 ** 2,'</p>';
echo 'c)', 2 ** 3 ** 4 / 1e25;
echo '<br>';
echo 'd)', 3 + (3 * 8) / 2 - 3;
echo '<br>';
?>

<style>
    .correto {
        color: green;
        font-weight: bold;
        margin: 0px;
    }
</style>
