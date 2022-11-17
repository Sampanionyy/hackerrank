<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

    function staircase($n) {
        // Write your code here
        
        $spaces = $n;
        
        for($i=1; $i<=$n; $i++){ 
            for($j=1; $j<=$n; $j++){
                if($j >= $spaces){
                    print("#");
                }
                else{
                    print(" ");
                }
                
                
            }
            
            $spaces--;
            print("\n");
            
        }

    }

    $n = intval(trim(fgets(STDIN)));

    staircase($n);
