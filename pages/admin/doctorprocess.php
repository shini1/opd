<?php 
$fname= $_POST["first_name"];
$lname= $_POST["last_name"];
$username= $_POST["user_id"];
$pass=$_POST["password"];
$department=$_POST["department"];
//for password encryption
$encrypted_password=md5($pass);
require('../config/mysql.php');
$sql="INSERT INTO users ( username , password, fname, lname,department )VALUES( '$username','$encrypted_password','$fname','$lname','$department')";
        if(mysqli_query($link, $sql)){
 echo "Records added successfully.";
} else{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}