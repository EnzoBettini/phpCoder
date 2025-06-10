<div class="titulo">Desafio: Operadores Lógicos</div>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1(terça)</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2(quinta)</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php

$t1 = $_POST['t1'] ?? null;
$t2 = $_POST['t2'] ?? null;

echo "<hr>";

if ($t1 === "1" && $t2 === "1") {
    echo "<br> TV 50 e Sorvete";
} elseif ($t1 === "1" || $t2 === "1") {
    echo "<br> TV 32 e Sorvete";
} else {
    echo "<br> Fica em casa mais saudavel";
}
