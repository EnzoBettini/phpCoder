<div class="titulo">Desafio: Equação</div>

<?php
$den1 = pow(6 * (3 + 2), 2);
$den1 = $den1 / (3 * 2);

$den2 = pow(((1 - 5) * (2 - 7)) / 2, 2);

$den1 = $den1 - $den2;

$den2 = pow($den1, 3);
$resultado = $den2 / pow(10, 3);
echo "Resultado: $resultado <br>";
