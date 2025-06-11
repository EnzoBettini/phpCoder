<!-- <div class="titulo">POST GET</div> -->

<?php
echo $_GET['nome'];
?>

<form action="#" method="post">
    <input type="text" name="chave">
    <button>Enviar</button>
</form>

<style>
    form {
        font-size: 1.8rem;
    }
</style>

<?php
echo $_POST['chave'];

var_dump($_GET);
?>
