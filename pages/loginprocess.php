<?php

class login {

    public $errors = array();
    public $messages = array();

    public function __construct() {

        session_start();
        if (isset($_GET["logout"])) {
            $this->doLogout();
        } elseif (isset($_POST["login"])) {
            $this->dologinWithPostData();
        }
    }
private function dologinWithPostData(){


    
    $username = $_POST["user_id"];
    $pass = $_POST["password"];
//for password encryption
    $encrypted_password = md5($pass);
    require('config/mysql.php');
    //username already exist or not
     $sql = "SELECT * FROM users WHERE username = '$username and password='$password';";
    if ($result = mysqli_query($link, $sql)) {
        $num_rows = mysqli_num_rows($result); // no of rows in the result


        if ($num_rows == 1) {
            echo "USER Verified";
        } else {
            echo "USER not Verified";
        }
            
        }
        else{
            echo "ERROR: Could not able to execute";
        }
}

}
