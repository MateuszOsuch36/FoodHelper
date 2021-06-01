<?php
    // Załączamy klasy kont
    require_once('Accounts.php');
    session_start();

    // Gdy zdecydujemy się stworzyć nowego użytkownika, będzie on dostępny 
    // do momentu wylogowania. Jest na ten moment zdefiniowane 3 użytkowników ( plik Accounts.php )

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
    
