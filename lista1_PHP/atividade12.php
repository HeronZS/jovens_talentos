<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade12</title>
</head>

<body>

<form action="" method="post">

    <label for="raio">Informe o raio: </label>
    <input type="number" name="raio" id="raio" step="any">

    <button type="submit">Calcular</button>

</form>
    
</body>

</html>


<?php

if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $raio = $_POST['raio'];

    function calcularArea($a){
        $pi = 3.14159;
        $area = $pi*($a * $a);
        return $area;
    }

    echo 'A área do círculo é ', calcularArea($raio);
}

?>