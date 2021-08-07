<?php
// 1- write program to sort array , ex: [1,6,9,4,8] it ll after sort [1,4,6,8,9]

$arr = [1, 6, 9, 4, 8];
echo "Before Sorting: ";
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . " ";
}
echo "<br/>";

// SELECTION SORTING
// for ($i = 0; $i < count($arr) - 1; $i++) {
//     for ($j = $i + 1; $j < count($arr); $j++) {
//         if ($arr[$j] < $arr[$i]) {
//             $temp = $arr[$j];
//             $arr[$j] = $arr[$i];
//             $arr[$i] = $temp;
//         }
//     }
// }

//BUBBLE SORTING
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr) - 1; $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
    }
}

echo "After Sorting: ";
for ($i = 0; $i < count($arr); $i++) {
    echo  $arr[$i] . " ";
}
