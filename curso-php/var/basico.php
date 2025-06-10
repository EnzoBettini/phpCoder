<div class="titulo">Variáveis</div>

<?php

$numero = 13;

echo $numero . '<br>';
var_dump($numero);

echo '<br>';
$a = 3;
$b = $a;
$soma = $a + $b;
echo $soma . '<br>';

echo isset($soma); // Verifica se a variável $soma está definida
unset($soma); // Remove a variável $soma
echo '<br>';

echo $_SERVER["HTTP_HOST"];

// PHP tem tipagem fraca
