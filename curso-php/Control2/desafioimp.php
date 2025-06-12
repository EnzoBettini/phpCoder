<div class="titulo">Desafio: Impressão</div>

<?php
$array =
    [
        "AAA",
        "BBB",
        "CCC",
        "DDD",
        "EEE",
        "FFF"
    ];

for ($i = 0; $i < count($array); $i++) {
    if ($i % 2 === 0) {
        echo "$array[$i]";
    }
}

echo "<br>";

foreach ($array as $index => $items) {
    if ($index % 2 === 0) {
        echo "$items";
    }
}
?>
