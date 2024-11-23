<?php

require 'functions.php';

$frutas = ["Banana", "Maçã", "Abacaxi", "Tomate", "Morango", "Pastel", "Limão", "Abacate", "Melão"];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade3</title>
</head>
<body>
    
    <h1>Gerar</h1>

    <?php
    echo montaRadio($frutas, "frutasRadio", true, "Morango")
    ?>

    <br>
    <br>
    <br>
    <br>
    
    <?php
    echo montaCheckBox($frutas, "frutasCheckbox", true, ["Banana", "Morango"])
    ?>
    
</body>
</html>