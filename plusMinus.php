<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

    function plusMinus($arr) {
        // Write your code here
        for($i=0; $i<count($arr); $i++){
            if($arr[$i]<0){
                @$negative += 1;
            }
            if($arr[$i]>0){
                @$positive += 1;
            }
            else if($arr[$i] == 0){
                @$zero += 1;
            }
        }
        @$count = count($arr);
        print(round($positive/$count, 6)."\n");
        print(round($negative/$count, 6)."\n");
        print(round($zero/$count, 6));
    }

    $n = intval(trim(fgets(STDIN)));

    $arr_temp = rtrim(fgets(STDIN));

    $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

    plusMinus($arr);
