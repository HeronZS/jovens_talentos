

<!DOCTYPE HTML>
<html lang = "pt-br">

<head>

    <meta charset= "UTF-8">
    <title>Exercício PHP e Banco de dados</title>
    <link rel="stylesheet" href="style.css">    

</head>

<body>

    <div class = "container-principal">

        <nav>
            <a href= "categoria.php">Categoria</a>
            <a href= "departamento.php">Departamento</a>
            <a href= "cidade.php">Cidade</a>
            <a href= "cliente.php">Cliente</a>
            <a href= "fornecedor.php">Fornecedor</a>
            <a href= "funcionario.php">Funcionário</a>
            <a href= "produto.php">Produto</a>
        </nav>

        <fieldset>
            <legend>Listagem de clientes:</legend>
            <table>


                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Código da Cidade</th>
                    <th>Nome da Cidade</th>
                    <th>Ações</th>
                </tr>

                <?php
                    foreach ($clientes as $cliente){
                        echo '<tr>';
                        echo '<td>' . $cliente['clicodigo'] . '</td>';
                        echo '<td>' . $cliente['clinome'] . '</td>';
                        echo '<td>' . $cliente['clicpf'] . '</td>';
                        echo '<td>' . $cliente['cidcodigo'] . '</td>';
                        echo '<td>' . $cliente['cidnome'] . '</td>';
                        echo '<td><a href="?deletarCliente=' . $cliente['clicodigo'] . '">Excluir</a></td>';
                        echo '</tr>';
                    }
                ?>
            

            </table>

        </fieldset>

        <fieldset>
            <legend>Cadastro de Cliente:</legend>
            <form method="POST">

                <label for = "nome_cliente">Nome:</label>
                <input type = "text" name = "nome_cliente" required>

                <label for = "cpf">CPF:</label>
                <input type = "text" name = "cpf" required>

                <select name = "cid_codigo">
                    <?php
                        foreach ($cidades as $cidade){
                            echo '<option value = "' . $cidade['cidcodigo'] . '">' . $cidade['cidnome'] . '</option>';
                        }
                    ?>
                </select>

                <input type="submit" name="cadastrarCliente" value="Cadastrar">
            </form>
        </fieldset>

    </div>

</body>

</html>


<?php

require_once 'functions.php';
require_once 'db.php';
$cidades = listar('TBCIDADE','CIDNOME');
$clientes = listar('TBCLIENTE','CLINOME', '*', 'JOIN MERCADO.TBCIDADE ON TBCLIENTE.CIDCODIGO = TBCIDADE.CIDCODIGO');

if (isset($_POST['cadastrarCliente'])){
    $nomeCliente = pg_escape_string($_POST['nome_cliente']);
    $cpf = pg_escape_string($_POST['cpf']);
    $cidadeCodigo = (int)$_POST['cid_codigo'];
    $value = "'$nomeCliente', '$cpf', $cidadeCodigo";

    inserir('cliente.php', 'TBCLIENTE', 'CLINOME, CLICPF, CIDCODIGO', $value);
}

if (isset($_GET['deletarCliente'])){
    $codigo = $_GET['deletarCliente'];
    excluir('cliente.php', 'TBCLIENTE', 'CLICODIGO', $codigo);
}

?>