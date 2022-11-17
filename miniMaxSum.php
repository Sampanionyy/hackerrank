<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

    function miniMaxSum($arr) {
        // Write your code here
        $total = array_sum($arr);
        $totalArray =array();
    
        for($i=0; $i<count($arr); $i++){
            
            $totalArray[] = $total-$arr[$i];         
        }

        print(min($totalArray)." ".max($totalArray));
    }

    $arr_temp = rtrim(fgets(STDIN));

    $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

    miniMaxSum($arr);
