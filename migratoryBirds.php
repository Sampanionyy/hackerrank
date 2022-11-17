<?php 
function migratoryBirds($arr) {
    // Write your code here
    
    @$tab = array_count_values($arr);
    @$max = max($tab);
    
    foreach($tab as $key => $t){
        if($t == $max){
            @$newTab[$key] = $t; 
        }
    }
    
    @$minKey = min(array_keys($newTab));
    
    return $minKey;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$arr_count = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = migratoryBirds($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
