<?php
// echo $_POST['email'];
$str = ' ongeldige gebruikersnaam ';
if (!isset($_POST['user'], $_POST['comm'], $_POST['email'], $_POST['submit'])) {
} else {
    if (empty(trim($_POST['user']))){
        echo htmlspecialchars($str);
    }

    if (empty(trim($_POST['email']))){
        echo ' ongeldig email ';
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        echo ' Ongeldig email formaat ';
    }
       
}