<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form action="" method="post">
    
    <label for="num1">Número 1: </label>
    <input type="number" name="num1" id="num1">
    
    <label for="num2">Número 2: </label>
    <input type="number" name="num2" id="num2">

    <button type="submit">Ver</button>

</form>
    
</body>
</html>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $contador = ' ';

    function verificar($a, $b){
     


    echo verificar($num1, $num2);

}