<?php
require_once("pages/loginprocess.php");
$login = new Login();
if ($login->isUserLoggedIn() == true) {
 echo "logged in";
 
 
 }
 else{
 include("pages/login.php");
 
 }