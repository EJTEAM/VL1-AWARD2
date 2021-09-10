<?php
//Start sessiom
session_start();
require('fb-ini.php'); 

if(isSet($_SESSION['access_token']))
	{
		echo"<a href='fblogout.php'>Se deconnecter</a>";
	}
else
	{
		echo"<a href='$login_url'>Se connecter avec Facebook</a>";

	}




?>