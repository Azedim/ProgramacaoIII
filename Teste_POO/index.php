<?php
    require "src/Pessoa.php";


    $socorro = new Pessoa("Enzo",8);
    //echo $socorro->fazAniversario();

    echo "<h1>Nome</h1>";
    echo $socorro->getNome();
    echo "<br>";
    echo "<h1>Idade</h1>";
    echo $socorro->getIdade();
?>