<!-- 2- create Registration form with input [email - password - repassword], and email format should be correct and password matched re-password, if the validation is done add user data in users array and display it in table -->

<form action="" method="post">
    <table>
        <tr>
            <td>Enter Email:</td>
            <td> <input type="text" placeholder="Email:" value="" name="email"></td>
        </tr>
        <tr>
            <td>Enter Password:</td>
            <td> <input type="password" placeholder="Password: " name="password"></td>
        </tr>
        <tr>
            <td>Enter Password Again:</td>
            <td><input type="password" placeholder="Re-Password: " name="repassword"></td>
        </tr>
        <tr>
            <td> <button name="submit">submit</button></td>
        </tr>
    </table>
</form>

<?php

class authi
{
    private $email;
    private $password;
    private $rePassword;
    private $userData;
    private $userArray;
    public function __construct($email, $password, $rePassword)
    {
        $this->email = $email;
        $this->password = $password;
        $this->rePassword = $rePassword;
        $this->userData = [$email, $password, $rePassword];
    }
    public function showUserInfo()
    {
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL) && $this->password === $this->rePassword) {
            $this->userArray = $this->userData;
            return $this->userArray;
        } else {
            return "There Is Something Wrong";
        }
    }
}

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $rePassword = $_POST['repassword'];
    $user = new authi($email, $password, $rePassword);
    $userArray = $user->showUserInfo();
}
?>

<?php
if (gettype($userArray) === "array") {
?>
    <table>
        <tr>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <tr>
            <td style="text-align: center;"><?php echo $userArray[0] ?></td>
            <td style="text-align: center;"><?php echo $userArray[1] ?></td>
        </tr>
    </table>
<?php
} else {
    echo $userArray;
}
