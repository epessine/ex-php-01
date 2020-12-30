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

        if ($idade < 6) 
        {
            echo "O candidato(a) $nome não tem idade suficiente.";
        }
        else if ($idade >= 6 && $idade <= 12)
        {
            echo "O candidato(a) $nome pertence à categoria $categorias[0].";
        }
        else if ($idade >= 13 && $idade <= 17)
        {
            echo "O candidato(a) $nome pertence à categoria $categorias[1].";
        }
        else if ($idade >= 18 && $idade <= 59)
        {
            echo "O candidato(a) $nome pertence à categoria $categorias[2].";
        }
        else if ($idade >= 60)
        {
            echo "O candidato(a) $nome pertence à categoria $categorias[3].";
        }
    ?>
    
</body>
</html>