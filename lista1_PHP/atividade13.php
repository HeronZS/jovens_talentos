<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade13</title>
</head>

<body>

    <form action="" method="post">
        <label for="vetor">Insira os valores separados por vírgula</label>
        <input type="text" name="vetor" id="vetor" required>

        <button type="submit">VER</button>
    </form>
    
</body>
</html>

<?php


if($_SERVER['REQUEST_METHOD'] == "POST"){

    $vetor = explode(',', $_POST['vetor']);

    function cubo($array){
        $resultado = [];
        foreach($array as $num){
            $resultado[] = pow(trim($num),3);
        }
        return $resultado;
    }

    $cuboValores = cubo($vetor);

    echo 'Os valores ao cubo são: <br>';
    foreach($cuboValores as $valor){
        echo $valor . '<br>';
    }

}

?>