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
                <td>Email</td>
                <td><input type="text" name="email" value="" placeholder="enter your email..."></td>
                <td><?php
                    if (isset($_POST["submit"])) {
                        $email = $_POST["email"];
                        $pattern = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";


                        if (empty($email)) {
                            $emailErr = "Email is Required 😏";
                            echo "<span style='color: red;font-weight:bold'>$emailErr</span>";
                        } else {
                            if (preg_match($pattern, $email)) {
                                echo "<span style='color: green;font-weight:bold'>Email is Valid 😀</span>";
                            } else {
                                echo "<span style='color: red;font-weight:bold'>Email is Not-Valid 😠</span>";
                            }
                        }
                    } ?>
                </td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="" placeholder="enter your password..."></td>
                <td><?php
                    if (isset($_POST["submit"])) {
                        $password = $_POST["password"];
                        // $pattern = "/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/";

                        if (empty($password)) {
                            $passwordErr = "Password is Required 😏";
                            echo "<span style='color: red;font-weight:bold'>$passwordErr</span>";
                        } else {
                            if (strlen($password) > 8) {
                                echo "<span style='color: green;font-weight:bold'>Email is Valid 😀</span>";
                            } else {
                                echo "<span style='color: red;font-weight:bold'>Email is Not-Valid 😠</span>";
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