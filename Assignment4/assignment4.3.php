<!-- create form to get 5 subject degree to calculate student result, so u will check if subject degree bigger than or equal 50 u will push it in new array, and if subject degree less than 50 u will push it in different array and show result table.
ex: subject_1 = 30, subject_2 = 50, subject_3=90, subject_4 =10, subject_5= 100.
successful_subjects = [50,90,100].
fails_subjects = [30,10].
------------------------
subjects result | status 
------------------------
50              | successful
90              | successful
100             | successful
30              | failed
10              | failed -->

<?php

$subjects = [30, 50, 90, 10, 100];
$successful_subjects = array();
$fails_subjects = array();


for ($i = 0; $i < count($subjects); $i++) {

    if ($subjects[$i] >= 50) {
        array_push($successful_subjects, $subjects[$i]);
    } else {
        array_push($fails_subjects, $subjects[$i]);
    }
}

// function successFailedMarks($subjects, $successful_subjects, $fails_subjects)
// {
//     for ($i = 0; $i < count($subjects); $i++) {

//         if ($subjects[$i] >= 50) {
//             array_push($successful_subjects, $subjects[$i]);
//         } else {
//             array_push($fails_subjects, $subjects[$i]);
//         }
//     }
// }

// successFailedMarks($subjects, $successful_subjects, $fails_subjects);

// for ($i = 0; $i < count($successful_subjects); $i++) {
//     echo $successful_subjects[$i] . " ";
// }
// echo "<br/>";
// for ($i = 0; $i < count($fails_subjects); $i++) {
//     echo $fails_subjects[$i] . " ";
// }


function checkMarks($sub, $successful_subjects)
{
    if (in_array($sub, $successful_subjects)) {
        return "successful";
    } else {
        return "Failed";
    }
}


echo "<table>";
for ($i = 0; $i < count($subjects); $i++) {
    $r = checkMarks($subjects[$i], $successful_subjects);
    if ($r === "successful")
        echo "<tr><td style='padding:0px 20px;font-weight:bold'>$subjects[$i]</td><td style='color:green;font-weight:bold'>$r</td></tr>";
    else {
        echo "<tr><td style='padding:0px 20px;font-weight:bold'>$subjects[$i]</td><td style='color:red;font-weight:bold'>$r</td></tr>";
    }
}
echo "</table>";
