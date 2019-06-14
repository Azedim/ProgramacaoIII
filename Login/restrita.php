<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Restrita</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Página Acessada</h1>
        <br>
        <?php

        $login = $_SESSION["usuario"];
        $senha = $_SESSION["Senha"];

        echo "Usuario: ".$login."<BR>";
        echo "Senha: ".$senha;
        ?>
        <a href = "logout.php">Sair</a>
    </body>
</html>