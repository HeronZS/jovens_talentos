<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade3</title>
</head>
<body>

    <form action="" method="post">
        <label for="num">Escolha um número</label>
        <input type="number" name="num" id="num" required>

        <button type="submit">VER RESULTADO</button>
    </form>
    
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $num = $_POST['num'];
    
    function sorteio($numeroEscolhido){
        define('MINIMO', 1);
        define('MAXIMO', 50);
        define('PREMIO', 'UM BOI GORDO');

        $numeroSorteado = mt_rand(MINIMO, MAXIMO);

        if($numeroEscolhido == $numeroSorteado){
            echo 'GANHOU! Foi sorteado - ' . $numeroSorteado . ' VOCÊ GANHOU ' . PREMIO;
        }

        else{
            echo 'Você perdeu! Foi sorteado o número ' . $numeroSorteado . ' e você escolheu o número ' . $numeroEscolhido;
        }
    }

    sorteio($num);

}