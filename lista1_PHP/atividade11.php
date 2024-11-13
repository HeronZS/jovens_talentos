<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <select name="quantidade">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>

        <button type="submit">Abrir</button>
    </form>
    
</body>
</html>


<?php

if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $quantidade = $_POST ['quantidade'];

    function imagem($quantidade){
        for ($i = 1; $i <= $quantidade; $i++){
            echo '<img src="img\star.png">';
        }
    }
    echo imagem($quantidade);
}