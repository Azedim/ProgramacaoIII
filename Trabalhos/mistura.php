<?php
    if(isset($_POST["voltar"])){
        header("location: professor.php");
    }else{
        header("location: sala.php");
    }
?>