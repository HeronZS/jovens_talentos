<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade3</title>
</head>
<body>

    <form action="" method="post">
        <label for="vetor">Insira os nomes separados por vírgula</label>
        <input type="text" name="vetor" id="vetor" required>

        <button type="submit">VER</button>
    </form>
    
</body>
</html>

<?php


if($_SERVER['REQUEST_METHOD'] == "POST"){

    $vetor = array_map('trim', explode(',', $_POST['vetor']));
    sort($vetor);

    echo 'Nomes em ordem alfabética: <br>';
    echo implode(', ', $vetor);

}

   
