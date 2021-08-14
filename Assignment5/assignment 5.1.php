<!-- 1- create a Login Form with inputs [email - password] and check if email and password exists in static data in an array, using class and function. -->


<form action="" method="post">
    <input type="email" placeholder="Enter Your Email:" value="" name="email">
    <input type="password" placeholder="Enter Your Password: " name="password">
    <button name="submit">submit</button>
</form>

<?php

class auth
{

    public $email;
    public $password;
    public function __construct($userEmail, $userPassword)
    {
        $this->email = $userEmail;
        $this->password = $userPassword;
    }
    public $usersInfo = [["ahmed@gmail.com", "12345"], ["mohamed123@gmail.com", "5678"], ["test@gmail.com", "98765"]];
    public function checkDate()
    {
        if (in_array([$this->email, $this->password], $this->usersInfo)) {
            echo "Email is Exist";
        } else {
            echo "Email isn't Exist";
        }
    }
}

if (isset($_POST["submit"])) {
    $uEmail = $_POST["email"];
    $uPassword = $_POST["password"];

    $user = new auth($uEmail, $uPassword);
    $user->checkDate();
}
