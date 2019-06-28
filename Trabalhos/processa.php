<?php
    if(isset($_POST) && $_POST["botao"] == "Entrar"){
        if(!file_exists("Alunos")){
            mkdir("Alunos");
        }

        $ext = explode(".",$_FILES["imagem"]["name"]);
        $ext = end($ext);

        $caminho = "Alunos"."/".$_POST["nomeAluno"].".".$ext;

        move_uploaded_file($_FILES['imagem']['tmp_name'],$caminho);
        header("location: funcionario.php");
    }else{
        header("location: sair.php");
    }
    
?>