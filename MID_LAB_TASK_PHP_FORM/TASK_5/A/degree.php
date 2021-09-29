<?php

    if(isset($_REQUEST['submit'])){
        $degree = array($_REQUEST['degreeSsc'],$_REQUEST['degreeHsc'],$_REQUEST['degreeBsc']);
        foreach($degree as $d){
            if($d!=""){
                echo $d.' ';
            }
        }
        echo ' selected';
    }
?>