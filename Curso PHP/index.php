<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Curso PHP</title>
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 1</h3>
                    <ul>
                        <li><a href="./exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="./exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="./exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="./exercicio.php?dir=basico&file=comentario">Comentários PHP</a></li>
                        <li><a href="./exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Módulo 2</h3>
                    <ul>
                        <li><a href="./exercicio.php?dir=tipos&file=int">Tipo: INT</a></li>
                        <li><a href="./exercicio.php?dir=tipos&file=float">Tipo: FLOAT</a></li>
                        <li><a href="./exercicio.php?dir=tipos&file=aritimeticas">Aritiméticas</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        Enzo Bettini <?= date('Y'); ?>
    </footer>
</body>

</html>
