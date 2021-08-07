<?php
// 2- write a program to swap first half the array with last half the array, ex: [1,2,3,4,5,6,7,8,9] : [9,8,7,6,5,4,3,2,1]

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
echo "before Swapping: ";
for ($i = 0; $i < count($arr); $i++) {
    echo  $arr[$i] . " ";
}
echo "<br/>";
$j = count($arr) - 1;
for ($i = 0; $i < count($arr) / 2; $i++) {
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
    $j--;
}
echo "After Swapping: ";
for ($i = 0; $i < count($arr); $i++) {
    echo  $arr[$i] . " ";
}
