<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Cadastro de Livros ( ͡° ͜ʖ ͡°)</h1>
    <form action="cadastrar_livro.php" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br><br>

        <label for="ano_publicacao">Ano de Publicação:</label>
        <input type="number" id="ano_publicacao" name="ano_publicacao" required><br><br>

        <label for="categoria">Categoria:</label>
        <input type="text" id="categoria" name="categoria"><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>