<?php

function validarNome(string $nome)
{
    if (empty($nome) || strlen($nome) < 3 || strlen($nome) > 50)
    {
        return false;
    }
    else
    {
        return true;
    }
}

function validarIdade(string $idade)
{
    if (empty($idade) || !is_numeric($idade) || $idade < 6 || $idade > 130)
    {
        return false;
    }
    else
    {
        return true;
    }
}