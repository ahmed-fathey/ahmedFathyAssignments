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

class marks
{
    public $subjects;
    public function __construct($sub)
    {
       $this->subjects=$sub;
    }
    public function checkDegrees()
    {
?>
        <table>
            <tr>
                <th>Degree</th>
                <th>Status</th>
            </tr>
            <?php
            for ($i = 0; $i < count($this->subjects); $i++) {
                for ($j = 1; $j < count($this->subjects[$i]); $j++) {
                    $k = 0;
                    if ($this->subjects[$i][$k] >= 50) {



                        $this->subjects[$i][$j] = "successful";
            ?>
                        <tr>
                            <td><?php echo $this->subjects[$i][$k] ?></td>
                            <td style="color:green;text-align: center;"><?php echo $this->subjects[$i][$j] ?></td>
                        </tr>
                    <?php
                    } else {
                        $this->subjects[$i][$j] = "failed";
                    ?>
                        <tr>
                            <td><?php echo $this->subjects[$i][$k] ?></td>
                            <td style="color:red;text-align: center;"><?php echo $this->subjects[$i][$j] ?></td>
                        </tr>
    <?php
                    }
                }
            }
        }
    }


    if (isset($_POST['submit'])) {
        $markDegrees = [[$_POST["deg1"], "status"], [$_POST["deg2"], "status"], [$_POST["deg3"], "status"], [$_POST["deg4"], "status"], [$_POST["deg5"], "status"]];
        $subjectMarks = new marks($markDegrees);
        // $subjectMarks->subjects = $markDegrees;
        $subjectMarks->checkDegrees();
    }
