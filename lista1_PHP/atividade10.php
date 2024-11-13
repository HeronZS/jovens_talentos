<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <label for="menor">Menor de 18</label>
        <input type="radio" value="Menor" name="idade">
        <br>
        <label for="adulto"> Acima de 18 e abaixo de 35</label>
        <input type="radio" value="Adulto" name="idade">
        <br>
        <label for="adultoPlus">Acima de 35 e abaixo de 65</label>
        <input type="radio" value="AdultoPlus" name="idade">
        <br>
        <label for="idoso"> Acima de 65 anos</label>
        <input type="radio" value="Idoso" name="idade">
        <br>
        <button type="submit">Ver</button>
    </form>    

</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(isset($_POST['idade'])){
        
        $idadeSelecionada = $_POST['idade'];

        echo ($idadeSelecionada);
    }else{
        echo "Nenhuma idade foi selecionada";
    }

}