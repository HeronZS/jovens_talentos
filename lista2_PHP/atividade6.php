<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade6</title>
</head>

<body>

    <form action="" method="post">

        <textarea name="string" id="string" rows="4" cols="50"></textarea>
        <br>
        <button type="submit">CONTAR PALAVRAS</button>
        <br><br>
    </form>
    
</body>
</html>

<?php

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $string = $_POST["string"];

    $count = str_word_count($string);
    echo 'O seu texto possui um total de ' . $count . ' palavras';

}