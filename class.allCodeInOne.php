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
    // 17-12-23 (1480. Running Sum of 1d Array)
    function runningSum($nums) {
        $newArray = [];
        $newArray[0] = $nums[0];
        for( $i=1; $i<count($nums); $i++ ){
            $newArray[$i] = $nums[$i] + $newArray[$i -1];
        }
        return $newArray;
    }

    function maximumWealth($accounts){
        $richValue = 0;
        for($i=0; $i < count($accounts); $i++){
            $currentCustomer = 0;
            for( $j =0; $j < count($accounts[$i]); $j++ ){
                $currentCustomer += $accounts[$i][$j];
            }
            if($richValue < $currentCustomer ){
                $richValue = $currentCustomer; 
            }
        }
        return $richValue;
    }
    
}

$output = new Solutions();

echo 'This output for Sum of Multiples : '. $output->sumOfMultiples(7)."\n";

$resultArray = $output->runningSum([1, 2, 3, 4]);
echo 'This output for running sum'. "\n";
print_r($resultArray);
echo "\n";

echo 'This output for maximum wealth : '.$output->maximumWealth([[1,2,3],[3,2,1]]);

