<?php
    if(isset($_POST["sair"])){
        header("location: professor.php");
    }else{
        header("location: laboratorio.php");
    }
?>