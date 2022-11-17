<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

    function timeConversion($s) {
        // Write your code here
        $time = date_format(date_create($s), "H:i:s");
        
        return $time;

    }

    $fptr = fopen(getenv("OUTPUT_PATH"), "w");

    $s = rtrim(fgets(STDIN), "\r\n");

    $result = timeConversion($s);

    fwrite($fptr, $result . "\n");

    fclose($fptr);
