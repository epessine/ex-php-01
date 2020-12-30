<?php

function definirMsgSessao(string $mensagem) : void
{
    $_SESSION['mensagem-erro'] = $mensagem;
}

function obterMsgSessao() : ?string
{
    if (isset($_SESSION['mensagem-erro']))
    {
        return $_SESSION['mensagem-erro'];
    }
    else
    {
        return null;
    }
}