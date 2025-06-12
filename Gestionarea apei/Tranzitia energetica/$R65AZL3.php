<?php

$pass = array("DashPass23i43tywD");
$upper = array("QWERTYUIOPASDFGHJKLZXCVBNM");
$lower = array("qwertyuiopasdfghjklzxcvbnm");
$num = array("1234567890");

$count = 0;

if (sizeof($pass) >= 20) {

    for ($i=0; $i < sizeof($pass); $i++) { 
        for ($j=0; $j < sizeof($upper); $j++) { 
            if($pass[$i] != $upper[$j]){
                $count++;
            }
        }
        for ($k=0; $k < sizeof($lower); $k++) { 
            if($pass[$i] != $upper[$k]){
                $count++;
            }
        }
    }
}
else if(sizeof($pass) < 10){
    echo "Not Valid";
}

if($count == 0){
    echo "Valid";
}

// 2 

$monday = array();
$mondays[] = 4;
$date = cal_days_in_month(CAL_GREGORIAN,8, 2023);

echo $date
?>