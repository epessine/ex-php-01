<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php

        $categorias = ["infantil", "adolescente", "adulto", "idoso"];

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        if (empty($nome) || empty($idade))
        {
            echo "Todos os campos devem ser preenchidos.";
        }
        else if (strlen($nome) < 3)
        {
            echo "O nome deve conter ao menos 3 caracteres.";
        }
        else if (strlen($nome) > 50)
        {
            echo "O nome não pode conter mais que 50 caracteres.";
        }
        else if (!is_numeric($idade) || $idade < 0 || $idade > 130)
        {
            echo "A idade inserida não é válida.";
        }
        else
        {
            if ($idade < 6) 
            {
                echo "O(a) candidato(a) $nome não tem idade suficiente.";
            }
            else if ($idade >= 6 && $idade <= 12)
            {
                echo "O(a) candidato(a) $nome pertence à categoria $categorias[0].";
            }
            else if ($idade >= 13 && $idade <= 17)
            {
                echo "O(a) candidato(a) $nome pertence à categoria $categorias[1].";
            }
            else if ($idade >= 18 && $idade <= 59)
            {
                echo "O(a) candidato(a) $nome pertence à categoria $categorias[2].";
            }
            else if ($idade >= 60)
            {
                echo "O(a) candidato(a) $nome pertence à categoria $categorias[3].";
            }
        }
 
    ?>

</body>
</html>