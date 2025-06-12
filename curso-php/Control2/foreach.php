<div class="titulo">Foreach</div>

<?php
$array =
    [
        1 => 'domingo',
        'segunda',
        'terça',
        'quarta',
        'quinta',
        'sexta',
        'sabado'
    ];

foreach ($array as $dia) {
    echo "$dia <br>";
}

echo "<hr>";

foreach ($array as $indice => $dia) {
    echo "$indice => $dia <br>";
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

echo "<hr>";

foreach ($matrix as $linha) {
    foreach ($linha as $coluna) {
        echo (string) $coluna;
    }
    echo "<br>";
}


foreach ($matrix as $index => $linha) {
    foreach ($linha as $index2 => $coluna) {
        echo "$index /// $index2";
        echo (string) $coluna;
    }
    echo "<br>";
}
?>
