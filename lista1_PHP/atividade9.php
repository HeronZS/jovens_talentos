<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade9</title>
</head>

<body>

    <form action="" method="post">

        <label for="futebol">Futebol</label>
        <input type="checkbox" name="esporte[]" id="futebol" value="Futebol">
        <br>
        
        <label for="basquete">Basquete</label>
        <input type="checkbox" name="esporte[]" id="basquete" value="Basquete">
        <br>
        
        <label for="volei">Vôlei</label>
        <input type="checkbox" name="esporte[]" id="volei" value="Volei">
        <br>
        
        <label for="boliche">Boliche</label>
        <input type="checkbox" name="esporte[]" id="boliche" value="Boliche">
        <br>
        
        <label for="xadrez">Xadrez</label>
        <input type="checkbox" name="esporte[]" id="xadrez" value="Xadrez">
        <br><br>
        
        <button type="submit">VER</button>
        <br><br>

    </form>
    
</body>
</html>

<?php

if ($_SERVER ['REQUEST_METHOD'] =='POST'){

    if(isset($_POST['esporte']) && is_array($_POST['esporte'])){
        echo 'Você selecionou os seguintes esportes: ' . '<br>';

        foreach ($_POST['esporte'] as $esporte){
            echo $esporte . '<br>';
        }
    }
    else{
        echo 'Você não escolheu nenhum esporte!';
    }

}


?>
