<?php
    //print_r($_FILES['imagem']);
    if(!file_exists($_POST['nome'])){
        mkdir($_POST['nome']);
    }
    $ext = explode(".",$_FILES['imagem']['name']);
    $ext = end($ext);

    $caminho = $_POST['nome']."/"."arquivo_do_".$_POST['nome'].".".$ext;
    if (move_uploaded_file($_FILES['imagem']['tmp_name'],$caminho)) {
        echo "SUCESSO";
    }else{
        echo "FALHOU";
    }
?>