<div class="titulo">Desafio: Sorteio</div>

<?php
$nomes =
    [
        "Elza",
        "Rapunzel",
        "Branca de Neve",
        "Cinderela"
    ];

$index = array_rand($nomes);

echo $nomes[$index];
?>
