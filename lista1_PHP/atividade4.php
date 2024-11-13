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
    
    <label for="caractere">Caractere: </label>
    <input type="text" name="caractere" id="caractere" maxlength="1">

    <button type="submit">Ver</button>

</form>
    
</body>
</html>

<?php

if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $string = $_POST ['string'];
    $caractere = $_POST ['caractere'];

    function repeticaoCaractere($texto, $letra){
        $contador = 0;
        for ($i= 0; $i <= strlen($texto) - 1; $i++){
            if (substr($texto, $i, 1) == $letra){
                $contador++;
            }
        }   
        return $contador;
    }
    echo'O caractere ' . $caractere . ' apareceu ' . repeticaoCaractere($string, $caractere) . ' vezes.';
}