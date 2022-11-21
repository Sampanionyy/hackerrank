<?php

/*
 * Complete the 'designerPdfViewer' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY h
 *  2. STRING word
 */

function designerPdfViewer($h, $word) {
    // Write your code here
    // Write your code here
    $alphabets = range('a', 'z');
    $wordSplit = str_split($word);
    
    foreach($wordSplit as $letter){
      $val[] = $h[array_search($letter, $alphabets)]; 
    }
    
    return max($val)*strlen($word);
    
    return max($arrayOfAlphabet)*strlen($word);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$h_temp = rtrim(fgets(STDIN));

$h = array_map('intval', preg_split('/ /', $h_temp, -1, PREG_SPLIT_NO_EMPTY));

$word = rtrim(fgets(STDIN), "\r\n");

$result = designerPdfViewer($h, $word);

fwrite($fptr, $result . "\n");

fclose($fptr);
