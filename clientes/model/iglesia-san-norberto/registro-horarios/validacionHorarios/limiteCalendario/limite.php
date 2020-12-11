<?php

date_default_timezone_set("America/Bogota");
$year = date("Y");
$month = date("m");
$day = date("d");
$date = $year."-".$month."-".$day;
$monthf = $month +1 ;
$dayf= 31;
if($month == 12){
    $year = $year+1;
    $month = 1;
    $day = 31;
    $datef=$year."-0".$month."-".$day;
}else if($month<12){
    if($month<9){
        $month = $month +1;
        if($month==2){
            $day = 28;
        }else if($month%2 && $month!=8){
            $day = 30;
        }else{
            $day = 31;
        } 
        $datef=$year."-0".$month."-".$day;
    }else if ($month>=9){
        $month = $month +1;
        if($month==11 && $month==9){
            $day = 30;
        }else{
            $day = 31;
        } 
        $day = 30;
        $datef=$year."-".$month."-".$day;
    }
}