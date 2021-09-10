<?php
$password=$_POST['passe'];
$email=$_POST['email'];
$hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.
//echo "Email : $email and Mot de passe: $passe";

$to      = $email; // Send email to our user
$subject = 'Signup | Verification'; // Give the email a subject 
$message = "
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
  
------------------------
Username: '.$email'
Password: '.$password.'
------------------------
  
Please click this link to activate your account:
http://www.yourwebsite.com/verify.php?email='.$email.'&hash='.$hash.'
  
"; // Our message above including the link
                      
$headers = 'From:support@ejsarl.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email

?>