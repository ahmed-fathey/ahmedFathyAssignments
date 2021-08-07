<?php
$n1 = 2;
$n2 = 0;
$n3 = 1;
$n4 = 19;

if ($n1 < $n2 && $n1 < $n3 && $n1 < $n4) {
    echo "minimum number : $n1";
} elseif ($n2 < $n1 && $n2 < $n3 && $n2 < $n4) {
    echo "minimum number : $n2";
} elseif ($n3 < $n1 && $n3 < $n2 && $n3 < $n4) {
    echo "minimum number : $n3";
} else {
    echo "minimum number : $n4";
}
