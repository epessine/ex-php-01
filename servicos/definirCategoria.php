<?php

function definirCategoria(string $idade) : string
{
    $categorias = ["infantil", "adolescente", "adulto", "idoso"];
    
    if ($idade >= 6 && $idade <= 12)
    {
        $categoria = $categorias[0];
        return $categoria;
    }
    else if ($idade >= 13 && $idade <= 17)
    {
        $categoria = $categorias[1];
        return $categoria;
    }
    else if ($idade >= 18 && $idade <= 59)
    {
        $categoria = $categorias[2];
        return $categoria;
    }
    else if ($idade >= 60)
    {
        $categoria = $categorias[3];
        return $categoria;
    }
}