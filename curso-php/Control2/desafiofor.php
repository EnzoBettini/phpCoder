<div class="titulo">Desafio: For</div>

<?php
for ($i = 5; $i >= 1; $i--) {
    for ($j = 0; $j < (6 - $i); $j++) {
        echo "#";
    }
    echo "<br>";
}

?>
