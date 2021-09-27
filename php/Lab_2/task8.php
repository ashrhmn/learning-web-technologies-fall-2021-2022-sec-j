<?php
    $arr = [
        [1,2,3,'A'],
        [1,2,'B','C'],
        [1,'D','E','F']
    ];

    function isNum($el){
        if(ord($el)>=48 && ord($el)<=57){
            return true;
        }
        else{
            return false;
        }
    }

    function isAlph($el){
        if(ord($el)>=65 && ord($el)<=90){
            return true;
        }
        else{
            return false;
        }
    }

    for($i=0;$i<4;++$i){
        for($j=0;$j<4;++$j){
            echo isNum($arr[$i][$j])?$arr[$i][$j]:' ';
        }
        echo '<br>';
    }

    for($i=0;$i<4;++$i){
        for($j=0;$j<4;++$j){
            echo isAlph($arr[$i][$j])?$arr[$i][$j]:' ';
        }
        echo '<br>';
    }
