<?php
    
    function operacao($n1,$n2,$op){
        if ($op == 'soma') {
            return $n1 + $n2;
        }else if ($op == 'sub') {
            return $n1 - $n2;
        }else if ($op == 'multi') {
            return $n1 * $n2;
        }else {
            return $n1 / $n2;
        }
    }
    
?>