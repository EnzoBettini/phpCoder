<div class="titulo">Atribuições</div>

<?php
$title = 'Atribuições';
$number = $number - 1.5;
$number++;
$number--;
$number %= 2;
$number **= 2;
$number .= 10; // apenas concatenação

$text = "esse é um texto";
$text .= " concatenado";
echo "$text <br>";

$valor =  $variavelQueNaoExiste ?? 'valor padrão';
