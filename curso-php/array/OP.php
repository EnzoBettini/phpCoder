<div class="titulo">Operações</div>

<?php
$dados =
[
    "nome" => "José",
    "idade" => 28
];

$dados2 =
[
    "cidade" => "Fortaleza"
];

$dadosCompletos = $dados + $dados2;

print_r($dadosCompletos);

echo "<br> {$dadosCompletos['idade']}";


unset($dadosCompletos['nome']);

var_dump($dadosCompletos);

$impar = [1, 3, 5];
$par = [2, 4, 6];

$completo = array_merge($impar, $par);

print_r($completo);
sort($completo);
print_r($completo);
?>
