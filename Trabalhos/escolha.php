<?php
    if(!isset($_POST['botao'])){
        if(isset($_POST['botao1'])){
            header("location: laboratorio.php");
        }else{
            header("location: sair.php");
        }
    }else{
        header("location: sala.php");
    }
?>