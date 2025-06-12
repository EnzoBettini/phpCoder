<div class="titulo">Desafio: tabela</div>

<form action="#" method="post">
    <label>Digite o número de linhas</label>
    <input type="number" name="linhas" id="linhas">
    <label>Digite o número de colunas</label>
    <input type="number" name="colunas" id="colunas">
    <button>Enviar</button>
</form>

<table>
    <tbody>
        <?php
        $lines = $_POST['linhas'];
        $columns = $_POST['colunas'];

        $contador = 1;

        for ($i = 0; $i < $lines; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $columns; $j++) {
                echo "<td>$contador</td>";
                $contador++;
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>



<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>
