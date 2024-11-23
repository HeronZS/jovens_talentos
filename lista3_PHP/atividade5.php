<?php

require_once("functions.php");

$sabores = ["4 queijos", "Pepperoni", "Strogonoff de carne", "Mexicana", "Calabresa", "Chocolate branco", "Chocolate preto"];
$tamanhos = ["Pequena", "Média", "Grande", "Gigante"];
$borda = ["Requeijão", "Chocolate", "Sem borda"];
$pagamentos = ["Dinheiro", "Cartão", "Cheque"];

echo "<form action='' method='post'>";

echo "<fieldset>";
echo "<legend>Cliente</legend>";
echo montaInput("text", "nome", "Nome") . "<br>";
echo montaInput("text", "sobrenome", "Sobrenome") . "<br>";
echo montaInput("text", "endereco", "Endereço") . "<br>";
echo montaInput("number", "numero", "Número (0-9999)") . "<br>";
echo montaInput("text", "bairro", "Bairro") . "<br>";
echo montaInput("text", "cidade", "Cidade") . "<br>";
echo montaInput("tel", "telefone", "Telefone") . "<br>";
echo montaInput("email", "email", "E-mail") . "<br>";
echo "</fieldset>";

echo "<fieldset>";
echo "<legend>Pedido</legend>";

echo "<label for='tamanho'>Tamanho:</label><br>";
echo montaRadio($tamanhos, "tamanho", true, null);

echo "<label for='sabores'>Sabores (até 4):</label><br>";
echo montaCheckBox($sabores, "sabores", true, []);

echo "<label for='borda'>Borda:</label><br>";
echo montaRadio($borda, "borda", true, null);

echo "<label for='observacao'>Observações:</label><br>";
echo "<textarea name='observacao' maxlength='100' placeholder='Máximo 100 caracteres'></textarea><br>";

echo "</fieldset>";

echo "<fieldset>";
echo "<legend>Pagamento</legend>";
echo "<label for='pagamento'>Forma de Pagamento:</label><br>";
echo montaRadio($pagamentos, "pagamento", true, null);
echo "</fieldset>";

echo "<input type='submit' value='Enviar Pedido'>";
echo "</form>";

?>