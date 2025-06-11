<div class="titulo">Desafio Meses</div>

<?php
$meses =
[
    "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
];

$mes = 5;

echo "<br>" . $meses[$mes - 1];

$meses_padrao =
[
    1 => "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
];

$mes = 5;

echo "<br>" . $meses_padrao[$mes];

?>
