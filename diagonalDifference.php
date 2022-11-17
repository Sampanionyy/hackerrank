<?php

    function diagonalDifference($arr) {
        // Write your code here

        // Write your code here
        for($i =0; $i<count($arr); $i++){
            @$incr += 1;
            for($j = 0; $j<count($arr[$i]); $j++){
                if($i == $j){
                    @$leftToRight += $arr[$i][$j];
                }
            }
            @$rightToLeft += $arr[$i][count($arr[$i]) - $incr];
        }
        
        return abs($leftToRight - $rightToLeft);
    }

    $fptr = fopen(getenv("OUTPUT_PATH"), "w");

    $n = intval(trim(fgets(STDIN)));

    $arr = array();

    for ($i = 0; $i < $n; $i++) {
        $arr_temp = rtrim(fgets(STDIN));

        $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
    }

    $result = diagonalDifference($arr);

    fwrite($fptr, $result . "\n");

    fclose($fptr);
