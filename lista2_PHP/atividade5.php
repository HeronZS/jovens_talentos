<?php

function gerarSenha($comprimento = 12){

    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%&*<>?_-';

    $caracteresMisturados = str_shuffle($caracteres);

    $senha = substr($caracteresMisturados, 0, $comprimento);

    return $senha;
}

echo 'A sua nova senha é: ', gerarSenha();

?>