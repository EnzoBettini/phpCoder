<div class="titulo">Tipo: STRING</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';
echo "Nós também" . ' somos';

echo '<br>';
echo "'Teste'" . ' "TESTE"' . '\'teste\'' . "\"teste\"";

printf("<br> testando a função print");
echo '<br>' . strtoupper('maximizando letras minúsculas');
echo '<br>' . strtolower('MINIMIZANDO LETRAS MAIÚSCULAS');
echo '<br>' . ucfirst('iniciando com letra maiúscula');
echo '<br>' . ucwords('iniciando com letra maiúscula em cada palavra');
echo '<br>' . strlen('quantas letras tem essa frase?');
echo '<br>' . mb_strlen('quantas letras tem essa frase?', 'UTF-8');
echo '<br>' . substr('Só uma parte da string', 4, 6);
echo '<br>' . substr('Só uma parte da string', -6, 6);
echo '<br>' . str_replace('parte', 'pedaço', 'Só uma parte da string');
echo '<br>' . str_repeat('A', 10);
echo '<br>' . str_pad('A', 10, 'B', STR_PAD_BOTH);
