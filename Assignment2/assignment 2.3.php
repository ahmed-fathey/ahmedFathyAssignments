<?php
// 3- write program to filter 2D array with delete each number even, ex: [ [1,2,7,9,4], [4,6,5,3], [4,8,9]], it will be after delete all even numbers [ [1,7,9], [5,3], [9]].

$arr = [[1, 2, 7, 9, 4], [4, 6, 5, 3], [4, 8, 9]];

foreach ($arr as $key => $value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}
echo "===========================AFTER REMOVING EVEN NUMBERS=========================<br/>";

foreach ($arr as $key => $value) {
    foreach ($value as $k => $number) {
        if ($number % 2 === 0) {
            unset($arr[$key][$k]);
        }
    }
}


foreach ($arr as $key => $value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}
