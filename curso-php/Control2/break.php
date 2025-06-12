<div class="titulo">Break Continue</div>

<?php

for ($i = 0; $i < 30; $i++) {
    if ($i == 10) {
        break;
    } else {
        echo "$i";
    }
}

echo "<br>";
$cont = 10;

for (;;) {
    echo "$cont";
    $cont++;
    if ($cont % 2 === 1) {
        continue;
    }
    if ($cont >= 20) {
        break;
    }
}

?>
