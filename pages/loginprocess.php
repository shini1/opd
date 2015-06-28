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

}
