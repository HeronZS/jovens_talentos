<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade6</title>
</head>

<body>

<form action="" method="post">
        
        <label for="ladoA">Lado A: </label>
        <input type="number" name="ladoA" id="ladoA" step="any">
        
        <label for="ladoB">Lado B: </label>
        <input type="number" name="ladoB" id="ladoB" step="any">

        <button type="submit">Calcular</button>

</form>
    
</body>
</html>

<?php

if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $ladoA = $_POST['ladoA'];
    $ladoB = $_POST['ladoB'];

    function calcularArea($x, $y){
        $area = $x * $y;
        return $area;
    }

    function calcularPerimetro($x, $y){
        $perimetro = ($x + $y) *2;
        return $perimetro;
    }

    echo '<br><br>' . 'A área do retângulo é ' . calcularArea($ladoA, $ladoB) . ' metros quadrados' . '<br><br>';
    echo 'O perímetro do retângulo é ' . calcularPerimetro($ladoA, $ladoB);

}