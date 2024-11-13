<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade16</title>
</head>
<body>

<form action="" method="post">
    
    <label for="nome">Nome: </label>
    <input type="text" name="nome" id="nome">
    
    <label for="ano">Ano de nascimento: </label>
    <input type="number" name="ano" id="ano">
    
    <label for="salarioHora">Salário p/Hora: </label>
    <input type="number" name="salarioHora" id="salarioHora">
    
    <label for="aluguel">Aluguel: </label>
    <input type="number" name="aluguel" id="aluguel">
    
    <button type="submit">VER</button>

</form>
    
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST ['nome'];
    $ano = $_POST ['ano'];
    $salarioHora = $_POST ['salarioHora'];
    $aluguel = $_POST ['aluguel'];

    function exibirTexto($n, $a, $sh, $alu){
        define("HORAS", 200);
        $hoje = date('Y');
        
        $idade = $hoje - $a;
        $salarioMes = $sh * HORAS;
        $sobra = $salarioMes - $alu;

        echo 'Olá, ' . $n . ', você tem ' . $idade . ' anos, você ganha ' . 'R$' . number_format($salarioMes, 2, ',', '.') . ' por mês.' . ' Sabendo que seu aluguel é de R$' . number_format($alu, 2, ',', '.') . ' lhe resta R$' . number_format($sobra, 2, ',', '.');
    }
    
    exibirTexto($nome, $ano, $salarioHora, $aluguel);

}


