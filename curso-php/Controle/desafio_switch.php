<div class="titulo">Desafio: Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">km-milha</option>
        <option value="milha-km">milha-km</option>
        <option value="km-metro">km-metro</option>
        <option value="F-C">F-C</option>
        <option value="C-F">C-F</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form {
        font-size: 1.8rem;
    }
</style>

<?php

$param = $_POST['param'] ?? null;
$conversao = $_POST['conversao'] ?? null;

$resultado = 0;

switch ($conversao) {
    case 'km-milha':
        $resultado = $param * 0.621;
        echo "km para milhas = $resultado";
        break;
    case 'milha-km':
        $resultado = $param * 1.609;
        echo "Milhas para KM = $resultado";
        break;
    case 'km-metro':
        $resultado = $param * 1000;
        echo "Km para metros = $resultado";
        break;
    case 'F-C':
        $resultado = ($param - 32) * (5 / 9);
        echo "f-c = $resultado";
        break;
    case 'C-F':
        $resultado = ($param * (9 / 5)) + 32;
        echo "C-F = $resultado";
        break;
    default:
        echo "Opção não selecionada";
        break;
}
