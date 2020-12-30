<?php

session_start();

include "servicos/definirCategoria.php";
include "servicos/mensagemSessao.php";
include "servicos/validacaoDados.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (validarNome($nome) === false && validarIdade($idade) === false)
{
    definirMsgSessao("Insira nome e idade válidos.");
}
else if (validarNome($nome) === false)
{
    definirMsgSessao("Insira um nome válido.");
}
else if (validarIdade($idade) === false)
{
    definirMsgSessao("Insira uma idade válida.");
}
else
{
    $categoria = definirCategoria($idade);

    definirMsgSessao("O(a) candidato(a) $nome pertence à categoria $categoria.");

}

header('location: index.php');