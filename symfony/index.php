<?php
function SortingOperation($N,$A) {
    // //write your Logic here:
    // $str1 = str_split($A[0]);

    // sort($str1, SORT_REGULAR);
    
    // foreach ($str1 as $letter) {
    //     print_r($letter);
    // }
    
    // echo "<br>";
    
    // $str2 = str_split($A[1]);
    
    // sort($str2, SORT_REGULAR);
    // foreach ($str2 as $letter) {
    //     print_r($letter);
    // }
                
    // return;
    for ($i=0; $i<$N; $i++) {
        printResult($A[$i]);
    }
}

function printResult($A) {
    $array = str_split($A);
    //sort($array);
    $charArr = [];
    
    for ($i=0; $i < count($array); $i++) {
        $charArr[$array[$i]] = 0;
    }
    $tmp = $array[0];
    for ($i=0; $i < count($array); $i++) {
        if ($array[$i] !== $tmp) {
            $tmp = $array[$i];
        }
        $charArr[$tmp] += 1;
    }

    arsort($charArr);

    $finalString = "";

    foreach ($charArr as $key => $value) {
        # code...
        $finalString .= str_repeat($key, $value);
    }

    echo $finalString . "\n";

}

$handle = fopen ("php://stdin","r");
// INPUT [uncomment & modify if required]
$N = trim(fgets($handle));
$A = array($N);
for ($i=0; $i < $N; $i++)
{
  $A[$i] = trim(fgets($handle));
}

// OUTPUT [uncomment & modify if required
$i=SortingOperation($N,$A);
echo "$i";
fclose($handle);

?>