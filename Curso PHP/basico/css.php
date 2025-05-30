<div class="titulo">Integração HTML</div>

<h1 center>
    <?php
        echo "Olá PHP! <br>";
        echo "<small> olá mundo! </small>"
    ?>
</h1>

<?= "<div center azul>Outra forma de me 'expressar'!</div>" ?>

<br>

<div center>
    <button dobro>
        <?= "Legal!" ?>
    </button>
</div>

<style>
    button {
        padding: 5px <?= 2 * 10 ?>px;
        background-color: #4285F4;
        color: #eee;
        font-weight: bold;
        border-radius: 10px;;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    /* <?= "[azul]" ?> {
        color: #4285F4;
    } Esse bloco funciona normalmente, mas está apontando um erro por conta de extensão do VS code*/

    [dobro] {
        font-size: <?= 2 * 10 ?>px;
    }
</style>
