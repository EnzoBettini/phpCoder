<div class="titulo">Multidimensionais</div>

<?php
$dados =
    [
        [
            "nome" => "Roberto",
            "idade" => 26,
            "cidade" => "São Paulo"
        ],
        [
            "nome" => "Carla",
            "idade" => 16,
            "cidade" => "Curitiba"
        ]
    ];

print_r($dados);

echo "<br>" . $dados[0]['idade'];
echo "<br>" . $dados[0];

unset($dados[1]);

var_dump($dados[1]);
?>
