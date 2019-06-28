<?php
    session_start();
    if(!isset($_SESSION["papel"])){
        header("location: sair.php");
    }else if (!$_SESSION['papel'] == 'professor'){
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
    <title>Professor</title>
</head>
<body>
    <div class="container">
        <form action="escolha.php" method="POST" class="formulario">
            <h1>Módulo do Professor</h1>
            <div>
                <div>
                    Ordenar alunos na sala: <button name="botao" value="sala">Ordenar</button>
                </div>
                <br>
                <div>
                    Ordenar alunos no laboratório: <button name="botao1" value="laboratorio">Ordenar</button>
                </div>
            </div>
            
            <button>Voltar</button>
        </form>
    </div>
    
</body>
</html>