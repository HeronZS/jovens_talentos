<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade8</title>
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


    if($username == 'matheus' && $password == 'pastel'){
        echo "Autenticação realizada com sucesso";
    }
    else{
        echo "Você não tem permissão de visualizar essa página";
    }

}


/*

    function login ($a, $b){

        $usuario = 'matheus';
        $senha = 'pastel';

        if($a == $usuario && $b == $senha){
            return "Autenticação realizada com sucesso";
        }
        else{
            return "Você não tem permissão de visualizar essa página";
        }
    }

    echo login($username, $password);

}

*/