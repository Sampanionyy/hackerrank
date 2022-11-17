<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {
    // Write your code here
    
    for ($i=0; $i< count($grades); $i++){
        if($grades[$i]<38){
            @$newArray[] = $grades[$i]; 
        }
        else{
            if(getNextMultiple($grades[$i]) - $grades[$i] < 3){
                @$newArray[] = getNextMultiple($grades[$i]);
            }
            else{
                @$newArray[] = $grades[$i];
            }
        }
    }
    return $newArray;
    
}

function getNextMultiple($nb){
    @$rest = $nb%5;
    
    return ($nb-$rest)+5;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
