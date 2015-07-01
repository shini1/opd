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

    private function dologinWithPostData() {



        $username = $_POST["user_id"];
        $pass = $_POST["password"];
//for password encryption
        $encrypted_password = md5($pass);
        require('config/mysql.php');
        //username already exist or not
        $sql = "SELECT * FROM users WHERE username = '$username' and password='$encrypted_password';";
        if ($result = mysqli_query($link, $sql)) {
            $num_rows = mysqli_num_rows($result); // no of rows in the result


            if ($num_rows == 1) {
                echo "USER Verified";
                while ($obj = $result->fetch_object()) {
                    printf("%s (%s)\n", $obj->fname, $obj->lname);
                    $_SESSION['user_login_status']=1;
                    $_SESSION['username']=$obj->username;
                    $_SESSION['fname']=$obj->fname;
                    $_SESSION['lname']=$obj->lname;
                    
                    $sql = "SELECT * FROM assigned_roles WHERE username = '$username" ;
                    if ($result = mysqli_query($link, $sql)) {
            $num_rows = mysqli_num_rows($result); // no of rows in the result


            if ($num_rows == 1) {
                echo "USER Identified";
                while ($obj = $result->fetch_object()) {
                    printf("%s\n", $obj->role_id);
                    $_SESSION['username']=$obj->username;
                    $_SESSION['fname']=$obj->role_id;
                }
            }
            else{
                echo 'User not identified';
            }
            }
                   
                    
                    
                }
            } else {
                echo "USER not Verified";
                $this->errors[] = "USER not Verified";
            }
        } else {
            echo "ERROR: Could not able to execute";
            $this->errors[] = "ERROR: Could not able to execute". mysqli_error($link);
        }
    }
     public function isUserLoggedIn() {
        if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
            return true;
        }
       
        return false;
    }

}
