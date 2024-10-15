<?php
// 0,0,1,1,2,4,7
//    0,1,2,3,4



// print upto 10

// base case : 0,0,1

// repeat this step unitl we have to generate
// {
//     if n===0 || n===1  return 0
//     if n===2 return 1
    
//     //    n = n[n-1] + n[n-2] + n[n-3] // 3
//     //    n = n[2] + n[1] + n[0]
//     //    n  = 1 + 0 + 0 // 3
// }



function series($n){
    $arr = [0,0,1];
    if ($n===0 || $n===1)  return 0;
    if($n===2) return 1;

    for($i=3; $i < $n; $i++){
        $arr[] = $arr[$i-1] + $arr[$i-2] + $arr[$i-3];
    }
    return end($arr);
}

$data = series(10);
print_r($data);
// print_r('series 0 :: ', series(0)).PHP_EOL;
// print_r('series :: ', series(1)).PHP_EOL;
// print_r('series :: ', series(2)).PHP_EOL;
// print_r('series :: ', series(3)).PHP_EOL;
// print_r('series :: ', series(10)).PHP_EOL;