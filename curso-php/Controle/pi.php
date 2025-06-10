<div class="titulo">Desafio: PI</div>

<?php

echo pi();
$pi = 3.14;

if ($pi == pi()) {
    echo "iguais";
} else {
    echo "<br>diferentes!";
}

if ($pi - pi() <= 0.01) {
    echo "<br>iguais";
} else {
    echo "<br>diferentes!";
}
