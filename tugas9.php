<?php

    echo "Bilangan fibonacci -> ";
    function fibonacci($n){
        $a = 0;
        $b = 1;

        for ($i = 0; $i < $n; $i++){
            echo $a . "   ";
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
    }

    fibonacci(20);

?>