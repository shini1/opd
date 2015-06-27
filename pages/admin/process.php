<?php 
echo $_POST["first_name"]."</br>";
echo $_POST["last_name"]."</br>";
echo $_POST["user_id"]."</br>";
echo $_POST["password"]."</br>";
$link = mysqli_connect("localhost", "root", "", "opd");
// Check connection
if($link === false){
 die("ERROR: Could not connect. " . mysqli_connect_error());
}
        if(mysqli_query($link, $sql)){
 echo "Records added successfully.";
} else{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}