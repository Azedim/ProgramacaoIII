<?php

session_start();

if (($_POST["Usuario"] == "admin") && ($_POST["senha"] == "123")){
    $_SESSION["usuario"] = $_POST["Usuario"];
    $_SESSION["Senha"] = $_POST["senha"];
    header("Location: restrita.php");
}else{
    header("Location: index.html");
}


?>