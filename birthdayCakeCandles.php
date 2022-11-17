<?php 
    function birthdayCakeCandles($candles) {
        // Write your code here

        $high = max($candles);
        
        for($i=0;$i<count($candles); $i++){
            if($candles[$i] == $high){
                @$total += 1;
            }
        }
        return $total;
    }

    $fptr = fopen(getenv("OUTPUT_PATH"), "w");

    $candles_count = intval(trim(fgets(STDIN)));

    $candles_temp = rtrim(fgets(STDIN));

    $candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));

    $result = birthdayCakeCandles($candles);

    fwrite($fptr, $result . "\n");

    fclose($fptr);
