<div class="titulo">Operadores Lógicos</div>

<?php

var_dump(true);
echo "<br>";
var_dump(!true);
echo "<br>";
var_dump(!!true);

echo "<hr>";

var_dump(true && true);
echo "<br>";
var_dump(false && true);
echo "<br>";
var_dump(false && false);

echo "<hr>";

var_dump(true || true);
echo "<br>";
var_dump(false || true);
echo "<br>";
var_dump(false || false);

echo "<hr>";

var_dump(true xor true);
echo "<br>";
var_dump(false xor true);
echo "<br>";
var_dump(false xor false);
