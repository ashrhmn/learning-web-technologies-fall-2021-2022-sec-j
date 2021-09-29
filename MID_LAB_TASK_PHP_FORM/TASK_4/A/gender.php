<?php
    if(isset($_REQUEST['submit'])){
        $gender = $_REQUEST['gender'];
        if($gender!=""){
            echo $gender.' is selected';
        }
        else{
            echo 'Invalid Input';
        }
    }
?>