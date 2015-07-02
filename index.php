<?php

require_once("pages/loginprocess.php");
$login = new Login();
if ($login->isUserLoggedIn() == true) {
    echo "logged in";
    if ($login->usertype() == "admin") {
        include(pages/admin/home.php);
    } else if ($login->usertype()== "receptionist") {
        include(pages/receptionist/home.php);
    } else if ($login->usertype()== "doctor") {
        include(pages/doctor/home.php);
    } else if ($login->usertype()== "patient") {
        include(pages/patient/home.php);
    }
} else {
    include("pages/login.php");
}