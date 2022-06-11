<?php

$temp = array(20,19,15,22,23,25,30);

function func($array){
    return array_sum($array)/count($array);
}

echo "Result: ".temp($temp);

?>