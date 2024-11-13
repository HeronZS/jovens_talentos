<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form action="" method="post">
    
    <label for="string">String: </label>
    <input type="text" name="string" id="string">
    
    <button type="submit">Ver</button>

</form>
    
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $string = $_POST ['string'];

   $totalCaracteres = strlen ( $string );

   echo 'O número total de caracteres é ' . $totalCaracteres . "<br>";

    function contar($a){
        for ($i = 1; $i <= strlen($a); $i ++) {
            echo $i . " ";
        }
    }

    echo contar($string);
}