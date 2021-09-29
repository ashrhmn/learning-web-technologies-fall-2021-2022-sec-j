<?php


    if(isset($_REQUEST['submit'])){
        $day = $_REQUEST['day'];
        $month = $_REQUEST['month'];
        $year = $_REQUEST['year'];

        $date = $day.'/'.$month.'/'.$year;

        if($day!="" && $month!="" && $year!=""){
            echo $date;
        }
        else{
            echo 'Invalid Date...';
        }
    }
    else{
        echo 'Invalid Submission';
    }
?>