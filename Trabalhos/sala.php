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
    <title>Sala</title>
</head>
<body> 
    <div class="sala">
        <?php
            $dir = "Alunos/";
            $a = scandir($dir);
            unset($a[0]);
            unset($a[1]);
            shuffle($a);
            ksort($a);
            foreach ($a as $value) {
                echo "<img src='$dir"."$value'>";
            }
        ?>
        <form class="misturar" action="mistura.php" method="POST">
            <button name="voltar" value="volta">Voltar</button>
            <button name="ficar" value="fica">Sortear</button>
        </form>
    </div>
</body>
</html>