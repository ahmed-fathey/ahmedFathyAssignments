<?php
// 1- create function to search number in array ex: numbers = [1,2,3,4,5,6,7,8,9] try to search with 4 return yes if is existing.

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function searchElement($arr, $key)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === $key) {
            return "Yes, " . $key . " existing in the array";
        }
    }
    return "No, " . $key . " not existing in the array";
}

$result = searchElement($arr, 4);
echo $result;
