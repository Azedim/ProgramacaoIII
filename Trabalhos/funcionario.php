<?php
    session_start();
    if(!isset($_SESSION["papel"])){
        header("location: sair.php");
    }else if (!$_SESSION["papel"] == "admin") {
        header("location: sair.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="inicio.css">
    <title>Funcionário</title>
</head>
<body>
    <div class="container"> 
        <form action="processa.php" method="POST" enctype="multipart/form-data" class="formulario">
            <h1>Módulo do Funcionário</h1>
            <div>
                Nome:<input name="nomeAluno" type="text">
            </div>
            <input type="file" name="imagem">
            <div>
                <button name="botao" value="Entrar">Enviar</button>
                <button name="botao" value="voltar">Voltar</button>
            </div>
        </form>
    </div>
</body>
</html>