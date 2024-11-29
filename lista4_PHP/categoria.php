

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
            <legend>Listagem de categorias:</legend>
            <table>

                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>

                <?php
                    foreach ($categorias as $categoria){
                        echo '<tr>';
                        echo '<td>' . $categoria['catcodigo'] . '</td>';
                        echo '<td>' . $categoria['catdescricao'] . '</td>';
                        echo '<td><a href="?deletarCategoria=' . $categoria['catcodigo'] . '">Excluir</a></td>';
                        echo '</tr>';
                    }
                ?>
            

            </table>

        </fieldset>

        <fieldset>
            <legend>Cadastro de Categoria:</legend>
            <form method="POST">

                <label for = "nome_categoria">Nome:</label>
                <input type = "text" name = "nome_categoria" required>

                <input type="submit" name="cadastrarCategoria" value="Cadastrar">
            </form>
        </fieldset>

    </div>

</body>

</html>


<?php

require_once 'functions.php';
require_once 'db.php';
$categorias = listar('TBCATEGORIA','CATDESCRICAO');

if (isset($_POST['cadastrarCategoria'])){
    $nomeCategoria = pg_escape_string($_POST['nome_categoria']);
    $value = "'$nomeCategoria'";
    inserir('categoria.php','TBCATEGORIA', 'CATDESCRICAO', $value);
}

if (isset($_GET['deletarCategoria'])){
    $codigo = $_GET['deletarCategoria'];
    excluir('categoria.php', 'TBCATEGORIA', 'CATCODIGO', $codigo);
}

?>