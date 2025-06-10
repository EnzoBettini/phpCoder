<div class="titulo">Relacionais</div>

<?php

var_dump(1 == '1'); // Igual
var_dump(1 === 1); // Idêntico

echo "<p>Relacionais</p><hr>";
$idade = 15;

if ($idade < 18) {
    echo "Menor de idade";
} elseif ($idade >= 18 && $idade < 65) {
    echo "Adulto";
} else {
    echo "Idoso";
}
