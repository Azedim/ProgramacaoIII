<?php
require "src/calculadora.php";
$conta = new calculadora($_POST["v1"],$_POST["v2"]);

if($_POST["operações"] == "mais"){
    $conta->soma();
}else if($_POST["operações"] == "menos"){
    $conta->subtracao();
}else if($_POST["operações"] == "vezes"){
    $conta->multiplicacao();
}else{
    $conta->divisao();
}