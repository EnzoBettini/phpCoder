<div class="titulo">Laço For</div>

<?php
for ($cont = 0; $cont <= 4; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for (; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for (; $cont <= 15;) {
    echo "$cont <br>";
    $cont++;
}

$matrix =
[
    [
        'a',
        'b',
        'c'
    ],
    [
        'k',
        'l',
        'm'
    ]
];

for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]}";
    }
    echo "<br>";
}
