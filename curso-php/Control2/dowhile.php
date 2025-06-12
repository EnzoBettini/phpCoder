<div class="titulo">DO / DO WHILE</div>

<?php
const VALOR_LIMITE = 5;
$contador = 0;

do {
    echo "Do-while $contador <br>";
    $contador++;
} while ($contador < VALOR_LIMITE);

$contador = 0;
echo PHP_EOL;

while ($contador < VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador++;
}
?>
