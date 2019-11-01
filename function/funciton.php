<?php
// function add($a,$b) {
//     return $a+$b;
// }
// echo add(3,5);

function add($a,$b) {
    echo $a+$b;
}
add(4,8);

echo "<br>";

// 不定參數 以陣列方式傳入參數

function add2(...$a) {
    $sum=0;
    foreach($a as $num) {
        $sum=$sum+$num;
    }
    echo $sum;
}

add2(4,5,4,7,6);
?>