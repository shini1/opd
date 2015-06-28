<?php

if (empty($_POST['user_id'])) {//check user_id field empty or not
    echo "Empty Username";
} elseif (empty($_POST['password']) || empty($_POST['confirm_password'])) {
    echo "Empty Password";
} elseif ($_POST['password'] !== $_POST['confirm_password']) {
    echo"Password does not match";
}
elseif (empty($_POST['first_name'])){ 
    echo "Empty first name";
}elseif (empty($_POST['last_name'])){ 
    echo "Empty last name";
    }
    elseif (empty($_POST['place'])){ 
    echo "Empty place";
    }
    elseif (empty($_POST['email'])){ 
    echo "Empty email";
    }
    elseif (empty($_POST['address'])){ 
    echo "Empty address";
    }
    elseif (empty($_POST['phn'])){ 
    echo "Empty phone no";
    }
    elseif (empty($_POST['age'])){ 
    echo "Empty age";
    }
    elseif (empty($_POST['sex'])){ 
    echo "Empty sex";
    }
else {
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
//username already exist or not
    $sql = "SELECT * FROM users WHERE username = '$username';";
    if ($result = mysqli_query($link, $sql)) {
        $num_rows = mysqli_num_rows($result); // no of rows in the result


        if ($num_rows >= 1) {
            echo "Sorry, that username is already Added.";
        } else {
$sql="INSERT INTO users ( username , password, fname, lname,place,email,address,phn,age,sex )VALUES( '$username','$encrypted_password','$fname','$lname','$place','$email','$address','$phn','$age','$sex')";
  $sql2 = "INSERT INTO assigned_roles ( username , role_id )VALUES( '$username', 1 )"; 
    if (mysqli_query($link, $sql)&& mysqli_query($link, $sql2) ) 
    {
            echo "Records added successfully.";
             
            }else{
               echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
              }
          }
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
    
