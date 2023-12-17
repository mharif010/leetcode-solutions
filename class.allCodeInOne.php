<?php 

class Solutions{
    function sumOfMultiples($n){
        $result = 0;
        for($i=1;$i<=$n;$i++){
            if(($i%3)==0 || ($i%5)==0 ||($i%7)==0){
                $result += $i;
            }
        }
        return $result;
    }
    function runningSum($nums) {
        $newArray = [];
        $newArray[0] = $nums[0];
        for( $i=1; $i<count($nums); $i++ ){
            $newArray[$i] = $nums[$i] + $newArray[$i -1];
        }
        return $newArray;
    }
    
}

$output = new Solutions();

echo 'This output for Sum of Multiples : '. $output->sumOfMultiples(7)."\n";
echo 'This output for running sum : '. $output->runningSum([1,2,3,4])."\n";

