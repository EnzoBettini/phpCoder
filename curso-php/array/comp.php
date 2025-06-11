<div class="titulo">Comparação Arrays</div>

<?php
$ar1 = ["teste" => 1];
$ar2 = ["teste" => 1];
$ar3 = [1 => "teste"];
var_dump($ar1 === $ar2);
var_dump($ar1 === $ar3);
var_dump($ar1 == $ar2);
var_dump($ar1 == $ar3);
?>
