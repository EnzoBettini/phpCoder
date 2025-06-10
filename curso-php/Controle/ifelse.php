<div class="titulo">If / Else</div>

<?php

$var = false;

if ($var) {
    echo "Verdadeiro<br>";
} else {
    echo "Falso<br>";
}

if ($var) {
    echo "Verdadeiro 2<br>";
} elseif ($var === 0) {
    echo "Falso 2<br>";
} else {
    echo "Falso 3<br>";
}
