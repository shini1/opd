<?php

if (empty($_POST['user_id'])) {//check user_id field empty or not
    echo = "Empty Username";
} elseif (empty($_POST['password']) || empty($_POST['confirm_password'])) {
    echo "Empty Password";
} elseif ($_POST['password'] !== $_POST['confirm_password']) {
    echo"Password does not match";
} else {
    $fname = $_POST["first_name"];
    $lname = $_POST["last_name"];
    $username = $_POST["user_id"];
    $pass = $_POST["password"];
//for password encryption
    $encrypted_password = md5($pass);
    require('../config/mysql.php');

    //username already exist or not
    $sql = "SELECT * FROM users WHERE username = '$username';";
    if ($result = mysqli_query($link, $sql)) {
        $num_rows = mysqli_num_rows($result); // no of rows in the result


        if ($num_rows >= 1) {
            echo "Sorry, that username is already Added.";
        } else {
            $sql = "INSERT INTO users ( username , password, fname, lname )VALUES( '$username','$encrypted_password','$fname','$lname')";
             $sql2 = "INSERT INTO assigned_roles ( username , role_id )VALUES( '$username', 2 )";
               
            if (mysqli_query($link, $sql)&& mysqli_query($link, $sql2) ) {
                if (mysqli_query($link, $sql)) {
                    echo "Records added successfully.";
                }
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
        }
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}