<form action="" method="post">
    <table>
        <tr>
            <td>Enter The First Degree:</td>
            <td><input type="number" name="deg1" placeholder="Enter The First Degree: "></td>
        </tr>
        <tr>
            <td>Enter The Second Degree:</td>
            <td><input type="number" name="deg2" placeholder="Enter The Second Degree: "></td>
        </tr>
        <tr>
            <td>Enter The Third Degree:</td>

            <td><input type="number" name="deg3" placeholder="Enter The Third Degree: "></td>
        </tr>
        <tr>
            <td>Enter The Third Degree:</td>
            <td> <input type="number" name="deg4" placeholder="Enter The Fourth Degree: "></td>
        </tr>
        <tr>
            <td>Enter The Fourth Degree:</td>
            <td> <input type="number" name="deg5" placeholder="Enter The Fifth Degree: "></td>
        </tr>

        <tr>
            <td><button name="submit">submit</button></td>
        </tr>
    </table>
</form>
<?php
$successful_subjects = array();
$fails_subjects = array();
if (isset($_POST["submit"])) {
    $subjets = [$_POST["deg1"], $_POST["deg2"], $_POST["deg3"], $_POST["deg4"], $_POST["deg5"]];
    function sucessSubjects($subjets)
    {
        $success = array();
        for ($i = 0; $i < count($subjets); $i++) {
            # code...
            if ($subjets[$i] >= 50) {
                $success[] = $subjets[$i];
            }
        }
        return $success;
    }
    function failSubjects($subjets)
    {
        $fail = array();
        for ($i = 0; $i < count($subjets); $i++) {
            # code...
            if ($subjets[$i] < 50) {
                $fail[] = $subjets[$i];
            }
        }
        return $fail;
    }

    $successful_subjects = sucessSubjects($subjets);

    $fails_subjects = failSubjects($subjets);

    function showStatus($subjets, $successful_subjects)
    {
?>
        <table>
            <tr>
                <th>Degree</th>
                <th>Status</th>
            </tr>

            <?php
            for ($i = 0; $i < count($subjets); $i++) {
                # code...
                if (in_array($subjets[$i], $successful_subjects)) {
            ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $subjets[$i] ?></td>
                        <td style="color:green;text-align: center;"><?php echo "successful" ?></td>
                    </tr>

                <?php

                } else {
                ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $subjets[$i] ?></td>
                        <td style="color:red;text-align: center;"><?php echo "failed" ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
<?php
    }
    showStatus($subjets, $successful_subjects);
}
