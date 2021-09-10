<?php
include 'fb-ini.php'; 

//destroy session
session_destroy();

unset($_SESSION['access_token']);
 
header("Location:fblogin.php") ; 




?>