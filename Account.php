<?php

//------
// Mateusz Kuskowski
//------

class Account
{
    // Podstawowe dane
    public $nick;
    private $pass;
    private $email;

    // Kontruktor
    public function __construct($nick ,$pass , $email)
    {
        $this->nick = $nick;
        $this->pass = $pass;
        $this->email = $email;
    }
    
    // Ważna funkcja
    // Hasło nie może być dostępne publicznie z oczywistych względów
    // Każde konto dostaje metodę do sprawdzania hasła tak aby nic nie wyciekło
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