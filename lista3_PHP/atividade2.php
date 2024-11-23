<?php

require 'functions.php';

$frutas = ["Banana", "Maçã", "Abacaxi", "Tomate", "Morango", "Pastel", "Limão", "Abacate", "Melão"];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade2</title>
</head>
<body>

<h1>Gerar Select</h1>

<h2>Opção com Texto</h2>

<?php
echo montaSelect($frutas, "frutasTexto", true);
?>

<h2>Opção com Índices Numéricos</h2>

<?php
echo montaSelect($frutas, "frutasNumero", false, );
?>
    
</body>
</html>