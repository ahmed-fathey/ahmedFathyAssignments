<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assignment3.1</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>First Name: </td>
                <td><input type="text" name="f_name" value="" placeholder="enter your first name..."></td>
                <td><?php
                    if (isset($_POST["submit"])) {
                        $f_name = $_POST["f_name"];
                        $pattern = "~^[\p{L}\p{Z}]+$~u";

                        if (empty($f_name)) {
                            $fnameErr = "First Name is Required 😏";
                            echo "<span style='color: red;font-weight:bold'>$fnameErr</span>";
                        } else {
                            if (strlen($f_name) >= 3 && preg_match($pattern, $f_name)) {
                                echo "<span style='color: green;font-weight:bold'>First Name is Valid 😀</span>";
                            } elseif (strlen($f_name) >= 3 && !preg_match($pattern, $f_name)) {
                                echo "<span style='color: red;font-weight:bold'>First Name is Not-Valid (Only Alphabetical letters) 😠</span>";
                            } else {
                                echo "<span style='color: red;font-weight:bold'>First Name is Not-Valid (Less Than 3 characters) 😠</span>";
                            }
                        }
                    } ?>
                </td>
            </tr>

            <tr>
                <td>Last Name: </td>
                <td><input type="text" name="l_name" value="" placeholder="enter your last name..."></td>
                <td><?php
                    if (isset($_POST["submit"])) {
                        $l_name = $_POST["l_name"];
                        $pattern = "~^[\p{L}\p{Z}]+$~u";

                        if (empty($l_name)) {
                            $fnameErr = "Last Name is Required 😏";
                            echo "<span style='color: red;font-weight:bold'>$fnameErr</span>";
                        } else {
                            if (strlen($l_name) >= 3 && preg_match($pattern, $l_name)) {
                                echo "<span style='color: green;font-weight:bold'>Last Name is Valid 😀</span>";
                            } elseif (strlen($l_name) >= 3 && !preg_match($pattern, $l_name)) {
                                echo "<span style='color: red;font-weight:bold'>Last Name is Not-Valid (Only Alphabetical letters) 😠</span>";
                            } else {
                                echo "<span style='color: red;font-weight:bold'>Last Name is Not-Valid (Less Than 3 characters) 😠</span>";
                            }
                        }
                    } ?>
                </td>
            </tr>
            <tr>
                <td>Phone Number: </td>
                <td><input type="text" name="p_number" value="" placeholder="enter your phone number..."></td>
                <td><?php
                    if (isset($_POST["submit"])) {
                        $p_number = $_POST["p_number"];
                        $pattern = "/^[0-9]+$/";

                        if (empty($p_number)) {
                            $pnumberErr = "Phone Number is Required 😏";
                            echo "<span style='color: red;font-weight:bold'>$pnumberErr</span>";
                        } else {
                            if (strlen($p_number) >= 11 && preg_match($pattern, $p_number)) {
                                echo "<span style='color: green;font-weight:bold'>Phone Number is Valid 😀</span>";
                            } else {
                                echo "<span style='color: red;font-weight:bold'>Phone Number is Not-Valid (Less Than 11 characters) 😠</span>";
                            }
                        }
                    } ?>
                </td>
            </tr>
            <tr>
                <td><button name="submit">submit</button></td>
            </tr>
        </table>
    </form>

</body>

</html>