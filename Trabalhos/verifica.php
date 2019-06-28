<?php
if($_POST["usuario"] == "professor" && $_POST["senha"] == "123"){
    session_start();
    $_SESSION["papel"] = "professor";
    header("location: professor.php");
}else if($_POST["usuario"] == "admin" && $_POST["senha"] == "456"){
    session_start();
    $_SESSION["papel"] = "admin";
    header("location: funcionario.php");
}else{
    header("location: sair.php");
}
?>