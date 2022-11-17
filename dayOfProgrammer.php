<?php 
function dayOfProgrammer($year) {
    // Write your code here
    /*if($year < 1918){
        
    }*/
    if($year >= 1918){
        for($i = 1; $i<=8; $i++){
            @$days += cal_days_in_month(CAL_GREGORIAN,$i,$year);   
        }
        $date =
    }
    return $days;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$year = intval(trim(fgets(STDIN)));

$result = dayOfProgrammer($year);

fwrite($fptr, $result . "\n");

fclose($fptr);