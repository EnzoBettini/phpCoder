<div class="titulo">Switch</div>

<?php

$categoria = 'popular';
$valor = 0.0;
$carro = '';

switch ($categoria) {
    case 'luxo':
        $carro = 'Mercedes';
        $valor = 250000;
        echo "carro: $carro valor: $valor";
        break;
    case 'SUV':
        $carro = 'Renegade';
        $valor = 150000;
        echo "carro: $carro valor: $valor";
        break;
    case 'popular':
        $carro = 'Kwid';
        $valor = 80000;
        echo "carro: $carro valor: $valor";
        break;
    default:
        echo "Caso inválido";
        break;
}
