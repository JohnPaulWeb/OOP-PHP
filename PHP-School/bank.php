<?php

class Account {

    private $course;
    private $account;

    public function __construct($course, $account = 1000 ) {

        $this -> $course = $course;
        $this -> account = $account;

        echo "Welcome to the $this ->  ! your account has been created\n";
        echo "This account has been hacked: " . $this ->account 
    }
}

?>