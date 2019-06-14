<?php
    //if ($_POST['op'] == 'soma') {
    //    $resultado = $_POST['a'] + $_POST['b'];
    //}else if ($_POST['op'] == 'sub') {
    //    $resultado = $_POST['a'] - $_POST['b'];
    //}else if ($_POST['op'] == 'multi') {
    //    $resultado = $_POST['a'] * $_POST['b'];
    //}else {
    //    $resultado = $_POST['a'] / $_POST['b'];
    //}
    //echo "<h1>" .$resultado. "</h1>";

/*
include - se tiver um erro, ele inclui independente

require - se tiver erro, ele nem excecuta pq essa página requere que a outra esteja ok

include_once - mesmo que o include, mas verifica se ja teve outro include, se ja teve nao faz nada

require_once - mesmo que o require, mas verifica se ja teve outro include, se ja teve nao faz nada
*/

require_once "funções.php";

echo "<h1>" .operacao($_POST['a'],$_POST['b'],$_POST['op']). "</h1>";

?>