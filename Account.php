<?php

//------
// Mateusz Kuskowski
//------

class Account
{
    // Basic Data
    public $nick;
    private $pass;
    private $email;
    private $name;
    private $surname;

    // Constructor
    public function __construct($nick ,$pass , $email, $name , $surname)
    {
        $this->nick = $nick;
        $this->pass = $pass;
        $this->email = $email;
        $this->name = $name;
        $this->surname = $surname;
    }
    
    // Important function
    // Password can't be public so we will have function
    // which will check if password match account password
    public function Validate($pass)
    {
        // Comparing passwords
        if (strncmp($this->pass,$pass, strlen($this->pass)) == 0 )
            return true;
        else
            return false;
    } 
}
?>