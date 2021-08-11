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
// $subjects_status;

if (isset($_POST["submit"])) {
    $subjects = [[$_POST["deg1"], "status"], [$_POST["deg2"], "status"], [$_POST["deg3"], "status"], [$_POST["deg4"], "status"], [$_POST["deg5"], "status"]];
    function subjectStatus($subjects)
    {
?>
        <table>
            <tr>
                <th>Degree</th>
                <th>Status</th>
            </tr>
            <?php
            for ($i = 0; $i < count($subjects); $i++) {
                for ($j = 1; $j < count($subjects[$i]); $j++) {
                    $k = 0;
                    if ($subjects[$i][$k] >= 50) {



                        $subjects[$i][$j] = "successful";
            ?>
                        <tr>
                            <td><?php echo $subjects[$i][$k] ?></td>
                            <td style="color:green;text-align: center;"><?php echo $subjects[$i][$j] ?></td>
                        </tr>
                    <?php
                    } else {
                        $subjects[$i][$j] = "failed";
                    ?>
                        <tr>
                            <td><?php echo $subjects[$i][$k] ?></td>
                            <td style="color:red;text-align: center;"><?php echo $subjects[$i][$j] ?></td>
                        </tr>
    <?php
                    }
                }
            }
        }

        subjectStatus($subjects);
    }
