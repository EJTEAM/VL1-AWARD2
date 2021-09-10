<!DOCTYPE html>
<html lang="fr">
<head>
  <title>tableau de bord</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style='width:100%;'>
  
              
  <table class="table table-dark table-striped" style='width:100%;'>
    <thead>
      <tr>
		<th>N°</th>
        <th>Nom</th>
		<th>Email</th>
        <th>Telephone</th>
        
      </tr>
    </thead>
	
	<?php
		
					
						         
	//$connexion = mysqli_connect("localhost", "ejsarl_furaha",  "eliamaisongo@","ejsarl_kampuma");
	$connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");
     
	
	
	$requet="SELECT * FROM `user`";
	$resultat=$connexion->query($requet);
        $i=0;
    while($user=mysqli_fetch_array($resultat))
	{
		++$i;
		$nom=$user['nom'];
		$prenom=$user['prenom'];
		$telephone=$user['telephone'];
		$email=$user['email'];
	
	
	    
	
/*
    //Recuperer les donnees distants
    $url="https://sms.ejsarl.com/track.php";

		$ch = curl_init(); 
    
    curl_setopt($ch, CURLOPT_URL, $url); 

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    $output = curl_exec($ch); 
 
		curl_close($ch);
	
	
        $stat= explode(",", $output);

        $facebookgen= $stat[0];
        $sep= explode(":", $facebookgen);
        $valeurfbgen=$sep[1];


        $tweetergen= $stat[1];
		 $sept= explode(":", $tweetergen);
        $valeurtwgen=$sept[1];
		
        $instagramgen= $stat[2];
		$sepi= explode(":", $instagramgen);
        $valeurintgen=$sepi[1];

        $facebookj= $stat[3];
        $sep1= explode(":", $facebookj);
        $valeurfbj=$sep1[1];


        $tweeterj= $stat[4];
		$sep2= explode(":", $tweeterj);
        $valeurtwj=$sep2[1];
		
        $instagramj= $stat[5];
        $sep3= explode(":", $instagramj);
        $valeurintj=$sep3[1];
		
		$autresgen= $stat[6];
		 $septa= explode(":", $autresgen);
        $valeuratgen=$septa[1];
		
		$autresj= $stat[7];
		 $sept7= explode(":", $autresj);
        $valeuratj=$sept7[1];
		
*/

	echo"
    <tbody>
    <tr>
		<td>$i</td>
        <td>$nom </td>
		
        <td>$email</td>
        <td>$telephone</td>
    </tr>
	
	
     
    </tbody>";}
	?>
  </table>
</div>

</body>
</html>
