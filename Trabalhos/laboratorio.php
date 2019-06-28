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
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="inicio.css">
    </head>
    <body>
        <div class="fundo">
            <?php
                $dir = "Alunos/";
                $a = scandir($dir);
                $br = 22;
                $cont = 2;
                unset($a[0]);
                unset($a[1]);
                shuffle($a);
                ksort($a);
                foreach ($a as $value) {
                    if($cont == $br){
                        echo "<br>";
                        $br = $br + 6;
                    }
                    echo "<img src='$dir"."$value'>";
                    $cont = $cont +1;
                }  
            ?>
            <form class="misturar" action="mistura_l.php" method="POST">
                <button name="sair" value="volta">Voltar</button>
                <button name="fica" value="fica">Sortear</button>
            </form>
        </div>
    </body>
</html>