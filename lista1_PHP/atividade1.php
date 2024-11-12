<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <label for="num">Insira o numero: </label>
        <input type="number" name="num" id="num">

        <button type="submit">Ver</button>

    </form>
    
</body>
</html>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $num = $_POST ['num'];


    function contar($a){
        $contador = ' ';
        for ($i = 0; $i <= $a; $i++){
            $contador .= $i . ' ';
        }

        return $contador;
    }
    
    echo contar($num);
}

?>