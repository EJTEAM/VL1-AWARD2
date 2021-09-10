<?php
require_once 'vendor/autoload.php';
  
// init configuration
$clientID = '784114177842-jgqpelf479fete0e9u1gss0umv84rqbc.apps.googleusercontent.com';
$clientSecret = 'oEN-2PcziR2LkBRMYmuKUlLo';
$redirectUri = 'https://sms.eliajimmy.net/redirect.php';
   
// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
 
// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
   
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
  $prenom=  $google_account_info->given_name;
  $nom =  $google_account_info->family_name;
  $url =  $google_account_info->picture;
  

  //header("Location:index.php") ; 

  echo "Email : $email, Noms : $name, prenom : $prenom, nom : $nom <img src='$url'> ";
  
  // now you can use this profile info to create account in your website and make user logged in.
} else {
  echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
}
?>