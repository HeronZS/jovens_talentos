<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade2</title>
</head>

<body>

    <form action="" method="post">
        
        <label for="mes">Digite o número do mês (1 a 12): </label>
        <input type="number" name="mes" id="mes" min="1" max="12" required>

        <button type="submit">VER</button>
        <br><br>
    </form>
    
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mes = $_POST['mes'];

    $meses = [
        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro",
    ];

    if($mes >= 1 && $mes <= 12) {
        echo $meses[$mes];
    }
    else{
        echo 'Insira um número entre 1 e 12';
    }

}