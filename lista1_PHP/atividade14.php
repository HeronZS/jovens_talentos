<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade14</title>
</head>

<body>

    <form action="" method="post">

    <label for="username">Usuário: </label>
        <input type="text" name="username" id="username">
        
        <label for="password">Senha: </label>
        <input type="password" name="password" id="password">

        <button type="submit">Login</button>

    </form>
    
</body>
</html>

<?php

if ($_SERVER ['REQUEST_METHOD'] =='POST'){
    
    $username = $_POST ['username'];
    $password = $_POST ['password'];

    if($username == $password){
        echo "ERRO: O nome de usuário e a senha não podem ser iguais!";
    }
    else{
        echo "Login efetuado com sucesso";
    }

}