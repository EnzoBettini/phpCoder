<div class="titulo">Valor vs Referencia</div>

<?php

$valor = 10;
$variavel = $valor; // Cópia do valor
$variavel++;
echo "Valor: $valor <br> Variavel: $variavel"; // 10
echo "<br><br>";
$valor = 10;
$variavel = &$valor; // Cópia do valor
$variavel++;
echo "Valor: $valor <br> Variavel: $variavel"; // 10
