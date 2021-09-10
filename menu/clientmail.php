<?php

//$connexion= mysqli_connect("localhost","eliajimm_ejhost","j'utiliseLGsmartTV","eliajimm_payement");
 $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");
     
$email=$_POST['email'];
	$expediteur=$_POST['expediteur'];
	$telephone=$_POST['telephone'];
	
	$sujet=$_POST['sujet'];
	
	$message=quoted_printable_encode($_POST['message']); 
    
    $to="support@ejsarl.com, eliajimmy1@gmail.com";
    
	//$headers = "De :" . $expediteur;
	$headers = "From:$expediteur <$email>";
	$header.= "Reply-to:$expediteur <$email>";
	$headers  .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/plain; charset=utf-8\r\n";
	$headers .= "Content-Transfer-Encoding: quoted-printable\r\n";
	// $headers .= array(
    //     'From' => $expediteur,
    //     'Reply-To' => $expediteur,
    //     'X-Mailer' => 'PHP/' . phpversion()
    // );
	
	 if( mail($to,$sujet,$message, $headers))
	{
		$requet=" INSERT INTO clientmaill(expediteur,notre_email,sujet,message,telephone)VALUES('$headers','$to','$sujet','$message','telephone')";
		$resultat=$connexion->query($requet);

		echo "Merci d'avoir contacté EJ SARL. Nous vous répondrons dans les plus brefs délais";
	}
else
	{
		echo "Impossible d'envoyer des emails. Veuillez réessayer.";
	}
		

?>
