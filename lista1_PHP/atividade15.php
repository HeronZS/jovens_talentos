<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade15</title>
</head>

<body>

    <form action="" method="post">
        <label for="vetor">Insira os valores</label>
        <input type="text" name="vetor" id="vetor" required>

        <button type="submit">VER</button>
    </form>
    
</body>
</html>

<?php


if($_SERVER['REQUEST_METHOD'] == "POST"){

    $vetor = explode(',', $_POST['vetor']);

    function repeticaoA($array){
        $contador = 0;
        foreach ($array as $letra){
            if (strtolower(trim($letra)) == 'a'){
                $contador++;
            }
        }   
        return $contador;
}
    echo'A letra A apareceu ' . repeticaoA($vetor) . ' vezes.';

}

?>