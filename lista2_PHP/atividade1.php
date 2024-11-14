<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade1</title>
</head>

<body>

    <form action="" method="post">

        <label for="unidade">Informe o número de unidades gastas: </label>
        <input type="number" name="unidade" id="unidade" required>

        <button type="submit">Cacular</button>

    </form>
    
</body>
</html>

<?php

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $unidade = $_POST ["unidade"];

    function calcularContaLuz($und){
        if($und <= 50){
            $total = $und * 3.50;
            return $total;
        }
        else if($und > 50 && $und<=150){
            $total = $und * 4;
            return $total;
        }
        else if($und > 150 && $und<=250){
            $total = $und * 5.30;
            return $total;
        }
        else {
            $total = $und * 6.70;
            return $total;
        }
    }

   echo calcularContaLuz($unidade);   
} 

?>