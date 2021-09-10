
<!DOCTYPE HTML>

<html>
	
	<head>
		
		<title>
			SMS STAT
		</title>
		
		<link rel="icon" type="image/gif" href="images/logo.gif">
		
		<link rel="stylesheet"  type="text/css" href="style.css" media="screen" />	

		<meta http-equiv="refresh" content="300">
		

		
	</head>
	
	<body>
			
	
			
	<table id=cadre_login1 cellspacing=5 cellpadding=5 style='width:100%;'>

  
			
					<tr>
										
												
						<th style='height:40px;  font-size:13pt; width:40%; border-bottom:1px solid #c0c0c0; text-align:center; background:#e9e8e8;'>
						
							EJ SMS
							
						</th>
					

						<th style='height:40px;  font-size:13pt; width:25%; border-bottom:1px solid #c0c0c0; text-align:center; background:#e9e8e8;'>
						
							NOW
							
						</th>

						<th style='height:40px; font-size:13pt; width:15%; border-bottom:1px solid #c0c0c0; text-align:center; background:#e9e8e8;'>
						
							TOTAL
							
						</th>

						
											
																					
					</tr>
					
					<?php

						//$connexion = mysqli_connect("localhost", "ejsarl_furaha",  "eliamaisongo@","ejsarl_kampuma");
	$connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");
     
	
	//infos total sur les commandes
	$requet="SELECT * FROM `commande` WHERE etat_paie='NON'";
	$resultat=$connexion->query($requet);
        
    $nonpayees=mysqli_num_rows($resultat);
	
	    
	$requet="SELECT * FROM `commande` WHERE etat_paie='OUI'";
	$resultat=$connexion->query($requet);
        
    $payeeoui=mysqli_num_rows($resultat);
	
	$totalcomm=$nonpayees+$payeeoui;
	
	
	
	
	//infos du journalière de la commande
	$dates = date("d-m-Y");
	$requets="SELECT * FROM `commande` WHERE etat_paie='NON' AND date='$dates'";
	$resultats=$connexion->query($requets);
        
    $jnonpayees=mysqli_num_rows($resultats);
	
	    
	$requets="SELECT * FROM `commande` WHERE etat_paie='OUI' AND date='$dates'";
	$resultats=$connexion->query($requets);
        
    $jpayeeoui=mysqli_num_rows($resultats);
	
	$jtotalcomm=$jnonpayees+$jpayeeoui;
	
	//rapport du jour des sms envoyés
	$requetj="SELECT SUM(nombreSMS) AS total, iduser, dates FROM `rapport` WHERE dates='$dates' GROUP BY iduser";
	$resultatj=$connexion->query($requetj);
	
	$i=0;
	//$totalgeneral=0;
	while($jour=mysqli_fetch_array($resultatj))
	{
		++$i;
		// $totalgeneral =$jour['total'];
		// $totalgeneral= $totalgeneral + $tott;
	
	
	}

	//rapport du jour des sms partis
	$reqen="SELECT SUM(nombreSMS) AS tot FROM `rapport` WHERE dates='$dates'";
	$resultaten=$connexion->query($reqen);
        
    $env=mysqli_fetch_array($resultaten);
	$totalgeneral=$env['tot'];
        
    // $messagesjour=mysqli_fetch_array($resultatj);
	// $Nbresmsenvoyesdujour=$messagesjour['total'];
	
	//rapport total des sms envoyés
	$requetm="SELECT SUM(nombreSMS) AS total FROM `rapport`";
	$resultatm=$connexion->query($requetm);
        
    $messages=mysqli_fetch_array($resultatm);
	$Nbresmsenvoyes=$messages['total'];
	
	//rapport du jour des sms partis
	$req="SELECT SUM(nombreSMS) AS tot FROM `rapport` WHERE dates='$dates' AND statut='Success'";
	$resultatr=$connexion->query($req);
        
    $Nbr=mysqli_fetch_array($resultatr);
	$Nbresmspartis=$Nbr['tot'];
	
	
	//rapport Total des sms partis
	$reqx="SELECT SUM(nombreSMS) AS Nbr FROM `rapport` WHERE statut='Success'";
	$resultatx=$connexion->query($reqx);
        
    $success=mysqli_fetch_array($resultatx);
	$totalsmspartis=$success['Nbr'];
	
	//rapport du jour des sms Reçus
	$requetd="SELECT SUM(nombreSMS) AS Nbr FROM `rapport` WHERE status='DELIVRD' AND dates='$dates' ";
	$resultatd=$connexion->query($requetd);
        
    $totsms=mysqli_fetch_array($resultatd);
	$Nbresmsrecus=$totsms['Nbr'];
	
	//rapport total des sms reçus
	$requetdeliv="SELECT SUM(nombreSMS) AS Nbr FROM `rapport` WHERE status='DELIVRD'  ";
	$resultatdeliv=$connexion->query($requetdeliv);
        
    $total=mysqli_fetch_array($resultatdeliv);
	$totalsmsrecus=$total['Nbr'];
	/*
	//rapport du jour des sms non-reçus
	$requetdl="SELECT * FROM `rapport` WHERE status='UNDELIV' AND dates='$dates' ";
	$resultatdl=$connexion->query($requetdl);
        
    $totundeliv=mysqli_num_rows($resultatdl);
	
	//rapport total des sms non-reçus
	$requettot="SELECT * FROM `rapport` WHERE status='UNDELIV' ";
	$resultattot=$connexion->query($requettot);
        
    $totalgenundeliv=mysqli_num_rows($resultattot);
	
	
	//rapport du jour des sms envoyés sans succès
	$req="SELECT * FROM `rapport` WHERE dates='$dates' AND statut!='Success'";
	$resultatr=$connexion->query($req);
        
    $non_messagesjour=mysqli_num_rows($resultatr);
	
	//rapport total des sms non-envoyés
	$reqs="SELECT * FROM `rapport` WHERE statut!='Success'";
	$resultatenv=$connexion->query($reqs);
        
    $totalgen_nonenvoyes=mysqli_num_rows($resultatenv);
	*/
	//les utilisateurs de sms
	$requets="SELECT * FROM `user`";
	$resultats=$connexion->query($requets);
        
    $totaluser=mysqli_num_rows($resultats);
	
	//les utilisateurs du jour
	$requetx="SELECT * FROM `user` WHERE date='$dates'";
	$resultatx=$connexion->query($requetx);
        
    $userjour=mysqli_num_rows($resultatx);


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
		

	$tot=$valeurfbj+$valeurtwj+$valeurintj+$valeuratj;	
	$totgen=$valeuratgen+$valeurfbgen+ $valeurintgen+$valeurtwgen;
								
								echo"
									<tr>
														
																				
										<td  style='height:20px; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
									       Nombre de visiteurs
											
										</td>
										
									
										<td style='height:20px;  text-align:center; font-size:13pt;  border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$tot
											
										</td>

										<td width=5% style='height:20px;  text-align:center; font-size:13pt;  width:20px; border-bottom:1px solid #c0c0c0; background:green; border-right:1px solid white; color:white;'>
								
										
											$totgen
											
										</td>

									
										
										
																			
										
															
																				
									</tr>
								
						

									<tr>
														
																				
										<td width=5% style='height:20px;  font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											Nombre de comptes créés
											
										</td>
										
										

										<td style='height:20px;  text-align:center; font-size:13pt;border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$userjour
											
										</td>

										<td style='height:20px;  text-align:center; font-size:13pt; border-bottom:1px solid #c0c0c0; background:green; border-right:1px solid white; color:white;'>
								
										
											$totaluser
											
										</td>


									
															
									</tr>
								
									<tr>
														
																				
										<td  style='height:20px;  font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											Nombre de commandes payées
											
										</td>
										
									
										
									

										<td  style='height:20px; font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$jpayeeoui
											
										</td>

										<td  style='height:20px; font-size:13pt; text-align:center;  border-bottom:1px solid #c0c0c0; background:green; color:white; border-right:1px solid white;'>
								
										
											$payeeoui
											
										</td>

										

										
																			 	
									</tr>

									<tr>
														
																				
										<td  style='height:20px; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											Nombre de commandes non payées
											
										</td>
										
									
										
									

										<td  style='height:20px; font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$jnonpayees
											
										</td>

										<td  style='height:20px;  font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:green; color:white; border-right:1px solid white;'>
								
										
											$nonpayees
											
										</td>
											
									</tr>

										<tr>
														
																				
										<td  style='height:20px; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											Nombre de sms envoyés
											
										</td>
										

										<td  style='height:20px; font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
										$totalgeneral/$i
											
										</td>

										<td  style='height:20px;  font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:green; color:white; border-right:1px solid white;'>
								
										
											$Nbresmsenvoyes
											
										</td>										
									</tr>



									<tr>
														
																				
										<td  style='height:20px; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											Nombre de sms partis
											
										</td>
										

										<td  style='height:20px; font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$Nbresmspartis/$i
											
										</td>

										<td  style='height:20px;  font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:green; color:white; border-right:1px solid white;'>
								
										
											$totalsmspartis
											
										</td>										
									
									</tr>

										<tr>
														
																				
										<td  style='height:20px; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											Nombre de sms reçus
											
										</td>
										

										<td  style='height:20px; font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											 $Nbresmsrecus/$i
											
										</td>

										<td  style='height:20px;  font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:green; color:white; border-right:1px solid white;'>
								
										
											$totalsmsrecus
											
										</td>

						
									</tr>
									
									</tr>

									";
					?>
										
					
				</table>
		
		</body>
		
</html>
								
		
		