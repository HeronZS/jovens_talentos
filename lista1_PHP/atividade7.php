<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade7</title>
</head>

<body>

    <form action="" method="post">
            
            <label for="peso">Peso: </label>
            <input type="number" name="peso" id="peso" step="any">
            
            <label for="altura">Altura: </label>
            <input type="number" name="altura" id="altura" step="any">

            <button type="submit">Calcular IMC</button>

    </form>
    
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    function calcularImc($a, $b){
        $imc = $a / ($b * $b);
        $imc = number_format($imc, 2);

        if ($imc >= 25) {
            return $imc . "<br>" . " Você está acima do peso!";
        }
        elseif ($imc >= 18.5 && $imc < 25) {
            return $imc . "<br>" . " Você está saudável!";
        }
        else{
            return $imc . "<br>" . " Você está abaixo do peso!";
        }
    }

    echo "O seu IMC é " , calcularImc($peso, $altura);

}