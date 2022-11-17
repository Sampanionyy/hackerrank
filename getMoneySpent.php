<?php

/*
 * Complete the getMoneySpent function below.
 */
function getMoneySpent($keyboards, $drives, $b) {
    /*
     * Write your code here.
     */
    foreach($keyboards as $keyboard){
        foreach($drives as $drive){
            @$prices[] = $keyboard+$drive;
        }
    }
    
    foreach($prices as $price){
        if($price <= $b){
            @$validOption[] = $price; 
        }
    }
    if (count($validOption) == 0) {
        return -1;
    }
    
    return max($validOption);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $bnm_temp);
$bnm = explode(' ', $bnm_temp);

$b = intval($bnm[0]);

$n = intval($bnm[1]);

$m = intval($bnm[2]);

fscanf($stdin, "%[^\n]", $keyboards_temp);

$keyboards = array_map('intval', preg_split('/ /', $keyboards_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%[^\n]", $drives_temp);

$drives = array_map('intval', preg_split('/ /', $drives_temp, -1, PREG_SPLIT_NO_EMPTY));

/*
 * The maximum amount of money she can spend on a keyboard and USB drive, or -1 if she can't purchase both items
 */

$moneySpent = getMoneySpent($keyboards, $drives, $b);

fwrite($fptr, $moneySpent . "\n");

fclose($stdin);
fclose($fptr);
