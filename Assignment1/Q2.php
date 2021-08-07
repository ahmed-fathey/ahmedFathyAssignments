<?php
$n1 = 3900;
$n2 = 3800;
$n3 = 3850;

if ($n1 > $n2) {
    if ($n2 > $n3) {
        echo "Middle Number: $n2";
    } elseif ($n3 > $n1) {
        echo "Middle Number: $n1";
    } else {
        echo "Middle Number: $n3";
    }
} elseif ($n2 > $n1) {
    if ($n1 > $n3) {
        echo "Middle Number: $n1";
    } elseif ($n3 > $n2) {
        echo "Middle Number: $n2";
    } else {
        echo "Middle Number: $n3";
    }
}
