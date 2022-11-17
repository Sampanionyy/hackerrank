<?php 

function pageCount($n, $p) {
    // Write your code here
    @$count = 0;
    @$countBack = 0;
    
    for($i = 1; $i<=$n; $i+=2){
        if($p == 1 || ($p%2 == 0 && ($i == $p || $i == $p+1)) || $p%2 != 0 && ($i == $p || $i == $p-1) ){
            break;
        }
        
        $count++;
    }
    
    for($j = $n; $j>=1; $j-=2){
        
        if(($n%2 != 0 && ($p == $n || $p == $n - 1)) || ($p%2 == 0 && ($j == $p || $j == $p+1)) || ($n%2 == 0 && $p == $n) || $p%2 != 0 && ($j == $p || $j == $p-1)){
            break;
        }
        $countBack++;
    }
    
    return min([$count, $countBack]);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$p = intval(trim(fgets(STDIN)));

$result = pageCount($n, $p);

fwrite($fptr, $result . "\n");

fclose($fptr);