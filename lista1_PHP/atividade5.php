<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        
        <label for="nota1">Nota 1: </label>
        <input type="number" name="nota1" id="nota1" step="any">
        
        <label for="nota2">Nota 2: </label>
        <input type="number" name="nota2" id="nota2" step="any">
        
        <label for="nota3">Nota 3: </label>
        <input type="number" name="nota3" id="nota3" step="any">
        
        <label for="nota4">Nota 4: </label>
        <input type="number" name="nota4" id="nota4" step="any">

        <button type="submit">Ver</button>

    </form>
    
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];

    function calculaMedia($a, $b, $c, $d) {
       $media = ($a + $b + $c + $d) / 4;
       $media = number_format($media, 2);

        if ($media >= 7){
            return $media . " (Aprovado)";
        }
        else{
            return $media . " (Reprovado)";
        }
    }


    echo 'A média do aluno é ' . calculaMedia($nota1, $nota2, $nota3, $nota4);

}