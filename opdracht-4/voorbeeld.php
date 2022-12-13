<?php
$email = "";
$str = ' ongeldige gebruikersnaam ';
if (!isset($_POST['user'], $_POST['comm'], $_POST['email'], $_POST['submit'])) {
} else {
    if (empty(trim($_POST['user']))){
        echo htmlspecialchars($str);
    }
    
    if (filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL)) {
        echo("is a valid email address");
      } else {
        echo("is not a valid email address");
      }
       
}