<?php 
 $fname= $_POST["first_name"];
 $lname= $_POST["last_name"];
$username= $_POST["user_id"];
  $pass=$_POST["password"];
 $place=$_POST["place"];
  $email=$_POST["email"];
  $address=$_POST["address"];
 $phn=$_POST["phn"];
   $age=$_POST["age"];
  $sex=$_POST["sex"];
  //for password encryption
$encrypted_password=md5($pass);
require('config/mysql.php');
$sql="INSERT INTO users ( username , password, fname, lname,place,email,address,phn,age,sex )VALUES( '$username','$encrypted_password','$fname','$lname','$place','$email','$address','$phn','$age','$sex')";
        if(mysqli_query($link, $sql)){
 echo "Records added successfully.";
} else{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
