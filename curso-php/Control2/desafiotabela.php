<div class="titulo">Desafio: tabela</div>

<table>
    <?php
    $matrix =
        [
            ['01', '02', '03', '04', '05', '06', '07', '08', '09'],
            ['11', '12', '13', '14', '15', '16', '17', '18', '19'],
            ['21', '22', '23', '24', '25', '26', '27', '28', '29'],
        ];

    foreach ($matrix as $linhas) {
        echo "<tr>";
        foreach ($linhas as $colunas) {
            echo "<td>$colunas</td>";
        }
        echo "</tr>";
    }
    ?>
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
