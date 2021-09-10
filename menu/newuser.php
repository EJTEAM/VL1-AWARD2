<?php
	  /* $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

   
		$email=$_POST['email'];
		
		$motpasse=$_POST['motpasse'];
		
		$telephone=$_POST['telephone'];
		
		$nom=$_POST['nom'];
		
		$postnom=$_POST['postnom'];
		
		$prenom=$_POST['prenom'];
		
		$types=$_POST['types'];
		
		$dates = date("d-m-Y");
	
		$heure = date("H:i");
	
    
    $hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.
//echo "Email : $email and Mot de passe: $passe";

$to      = $email; // Send email to our user
$subject = 'Signup | Verification'; // Give the email a subject 
$message = "
Merci pour votre inscription!
Votre compte a été créé, vous pouvez vous connecter avec les informations d'identification suivantes après avoir activé votre compte en appuyant sur l'url ci-dessous.
  
------------------------
Email: '.$email'
Mot de passe: '.$motpasse.'
------------------------
  
Veuillez cliquer sur ce lien pour activer votre compte:
https://sms.eliajimmy.net/activecompte.php?&email='.$email.'&hash='.$hash.'
  
"; // Our message above including the link
                      
$headers = 'From:support@ejsarl.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email


   $requet="INSERT INTO user(nom, postnom, prenom, email,telephone,motpasse,cleactivation,types,date,heure)VALUES('$nom','$postnom', '$prenom','$email','$telephone','$motpasse','$hash','Invite','$dates','$heure')";
	$resultat=$connexion->query($requet);

	$idclient=mysqli_insert_id($connexion);
	
	$requetee="INSERT INTO `solde` (`solde_client`,`quantite_achetee`,`quantite_consommee`)VALUES('$idclient',5,0)";
    $resultatee=$connexion->query($requetee);

   require_once('message.php')



 ?>*/

				

              

				
         