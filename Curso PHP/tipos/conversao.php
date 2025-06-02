<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX);


echo '<br>';
var_dump(PHP_INT_MAX + 1); // virou float
echo '<br>';
var_dump(1 + 1.0);
var_dump((float) 3);
var_dump((int) 2.8);


var_dump(3 + "2.0");
var_dump(1 . "cinco");
