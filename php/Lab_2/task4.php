<?php

function largestNumber($n1,$n2,$n3){
    if($n1>$n2){
        if($n1>$n3){
            return $n1;
        }
    }
    else{
        if($n2>$n3){
            return $n2;
        }
    }
    return $n3;
}
echo largestNumber(4,9,7).' is the largest';
