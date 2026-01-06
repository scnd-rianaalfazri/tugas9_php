<?php

function isPrima($n) {
    if ($n <= 1) return false;
    if ($n == 2) return true;
    if ($n % 2 == 0) return false;

    for ($i = 3; $i <= sqrt($n); $i += 2){
        if ($n % $i == 0) return false;
    }
    return true;
}

echo "Bilangan Prima -> ";

for ($i = 1; $i <= 200; $i++){
    if (isPrima($i)){
        echo $i . "  ";
    }
}

?>
