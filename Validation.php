<?php

//------
// Mateusz Kuskowski
//------

    // Załączamy klasy kont
    require_once('Accounts.php');
    session_start();


    if(!isset($_SESSION['isLogged']))
    {
        if ($_POST['userAction'] == 'logIn') 
        {
            // Gdy użytkownik wypełnił formę do logowania


        }
        else if ( $_POST['userAction'] == 'register' )
        {
            // Gdy użytkownik wypełnił formę do rejestracji

            
        }
        else
            header('Location: loginForm.php');// Nieudana rejestracja       
    }
    else
        header('Location: loginForm.php');

?>
    
