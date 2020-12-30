<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="titulo">
        <h2>Formulário de Inscrição de Competidores</h2>
    </div>

    <div id="mensagem">
        <p>
            <?php 
            if (empty($_SESSION['mensagem-erro']))
            {
                echo "";
            }
            else
            {
                echo $_SESSION['mensagem-erro'];
            }
            ?>
        </p>
    </div>
    
    <div id="formulario">
        <form action="script.php" method="post">
            <p>Nome: <input type="text" name="nome"></p>
            <p>Idade: <input type="text" name="idade"></p>
            <p><input type="submit" value="Enviar"></p>
        </form>
    </div>
    
</body>
</html>