<?php 
$fname= $_POST["first_name"];
$lname= $_POST["last_name"];
$username= $_POST["user_id"];
$pass=$_POST["password"];
//for password encryption
$encrypted_password=md5($pass);
require('../config/mysql.php');
$sql="INSERT INTO users ( username , password, fname, lname )VALUES( '$username','$encrypted_password','$fname','$lname')";
        if(mysqli_query($link, $sql)){
 echo "Records added successfully.";
} else{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}