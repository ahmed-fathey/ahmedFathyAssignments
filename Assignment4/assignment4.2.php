<?php
// 2- create function to convert each even number to odd number.


function convertEvenToOdd($number)
{
    $n = $number;
    if ($n % 2 === 0) {
        $n += 1;
        return $number . " odd number";
    }
    return $n . " odd number";
}

$result = convertEvenToOdd(100);
echo $result;
