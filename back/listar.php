<?php

require_once "config.php";

$stmt = $con->query("SELECT * FROM livros");
$livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/biblioteca/front/style.css">
    <title>Lista</title>
</head>
<body>
    <h1>Livros</h1>
<table border=1>
    <tr>
        <th>Autor</th>
        <th>Descrição</th>
        <th>Ano Publicação</th>
    </tr>
    <?php foreach ($livros as $livro) { ?>
        <tr>
            <td><?php echo $livro["autorLivro"]; ?></td>
            <td><?php echo $livro["descricaoLivro"]; ?></td>
            <td><?php echo $livro["anoPublicacao"]; ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>