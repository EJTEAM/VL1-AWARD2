
<!DOCTYPE HTML>

<html>
	
	<head>
		
		<title>
			VIEW
		</title>
		
		<link rel="icon" type="image/gif" href="images/logo.gif">
		
		<link rel="stylesheet"  type="text/css" href="style.css" media="screen" />	

		<meta http-equiv="refresh" content="300">
		
	</head>
	
	<body>
			
	
			
	<table id=cadre_login1 cellspacing=5 cellpadding=5 style='width:100%;'>

  
			
					<tr>
										
												
						<th style='height:25px;  font-size:13pt; width:40%; border-bottom:1px solid #c0c0c0; text-align:center; background:#e9e8e8;'>
						
							EJ HOSTING
							
						</th>
					

						<th style='height:25px;  font-size:13pt; width:25%; border-bottom:1px solid #c0c0c0; text-align:center; background:#e9e8e8;'>
						
							NOW
							
						</th>

						<th style='height:25px; font-size:13pt; width:15%; border-bottom:1px solid #c0c0c0; text-align:center; background:#e9e8e8;'>
						
							TOTAL
							
						</th>

						
											
																					
					</tr>
					
    <?php
       
        
       $dates = date("d-m-Y");
						
    $connexion= mysqli_connect("localhost","eliajimm_ejhost","j'utiliseLGsmartTV","eliajimm_payement");

    //infos total sur visiteurs
	$requetv="SELECT * FROM `visiteurs` WHERE date_jour ='$dates'";
	$resultatv=$connexion->query($requetv);
    $visiteurjour=mysqli_num_rows($resultatv);
	
	    
    $requetvv="SELECT * FROM `visiteurs`";
	$resultatvv=$connexion->query($requetvv);
    $visiteurtot=mysqli_num_rows($resultatvv);
     
	
	//infos total sur les commandes
	$requet="SELECT * FROM `factureclient` WHERE statut ='NON PAYEE'";
	$resultat=$connexion->query($requet);
        
    $nonpayees=mysqli_num_rows($resultat);
	
	    
	$requet="SELECT * FROM `factureclient` WHERE statut ='PAYEE'";
	$resultat=$connexion->query($requet);
        
    $payeeoui=mysqli_num_rows($resultat);

	
	
	//infos du journalière de la commande
	$requets="SELECT * FROM `factureclient` WHERE statut ='NON PAYEE' AND dates='$dates'";
	$resultats=$connexion->query($requets);
        
    $jnonpayees=mysqli_num_rows($resultats);
	
	    
	$requets="SELECT * FROM `factureclient` WHERE statut ='PAYEE' AND dates='$dates'";
	$resultats=$connexion->query($requets);
        
    $jpayeeoui=mysqli_num_rows($resultats);
	
	$jtotalcomm=$jnonpayees+$jpayeeoui;
	
	
	$requett="SELECT * FROM `commande` WHERE statut='ACTIF' AND com_produit<5";
    $resultatt=$connexion->query($requett);
    $hebergementot=mysqli_num_rows($resultatt);

    $requetj="SELECT * FROM `commande` WHERE statut='ACTIF' AND com_produit<5 AND date_jour='$dates'";
    $resultatj=$connexion->query($requetj);
    $hebergemenjour=mysqli_num_rows($resultatj);

    $requettt="SELECT * FROM `commande` WHERE statut='ACTIF' AND com_produit>4";
    $resultattt=$connexion->query($requettt);
    $domainetot=mysqli_num_rows($resultattt);

    $requetjj="SELECT * FROM `commande` WHERE statut='ACTIF' AND com_produit>4 AND date_jour='$dates'";
    $resultatjj=$connexion->query($requetjj);
    $domainejour=mysqli_num_rows($resultatjj);
   
	
	//les utilisateurs de sms
	$requets="SELECT * FROM `user`";
	$resultats=$connexion->query($requets);    
    $totaluser=mysqli_num_rows($resultats);
	
	//les utilisateurs du jour
	$requetx="SELECT * FROM `user` WHERE date='$dates'";
	$resultatx=$connexion->query($requetx);
    $userjour=mysqli_num_rows($resultatx);

    //Nbre de comptes qui expirent dans moins de 30 jours
    $requetmoins="SELECT * FROM `commande` WHERE statut='ACTIF'";
    $resultatmoins=$connexion->query($requetmoins);
    $nbre=0;
    $nbreexpire=0;
    $z=0;
    while($cal=mysqli_fetch_array($resultatmoins))
        {
            $datecom=$cal['date_expiration'];
            $x = strtotime($datecom);
            $y = strtotime($dates);
            $z=($x-$y)/86400;
            if($z>0 AND $z<31)
                {
                   $nbre=$nbre+1;
                   //$nbre=$z."OUI";
                   
                }
            else if($z<1)
                {
                    $nbreexpire=$nbreexpire+1;
                    //$nbreexpire=$z."NON";

               }

        }
    
    


   
		

						
								
								echo"
									<tr>
														
																				
										<td  style='height:20px; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
									       Nombre de Visiteurs
											
										</td>
										
									
										<td style='height:20px;  text-align:center; font-size:13pt;  border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
                                        $visiteurjour
											
										</td>

										<td width=5% style='height:20px;  text-align:center; font-size:13pt;  width:20px; border-bottom:1px solid #c0c0c0; background:green; border-right:1px solid white; color:white;'>
								
										
                                        $visiteurtot
											
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
								
										
											Nombre de Factures payées
											
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
								
										
											Nombre de Factures non payées
											
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
								
										
											Nombre  d'Hebergement
											
										</td>
										
									
										
									

										<td  style='height:20px; font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
                                        $hebergemenjour
											
										</td>

										<td  style='height:20px;  font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:green; color:white; border-right:1px solid white;'>
								
										$hebergementot
											
										
											
										</td>

									

										
																				
                                </tr>
                                    
                                <tr>
														
																				
                                    <td  style='height:20px; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
                            
                                    
                                        Nombre de noms de domaine
                                        
                                    </td>
                                    
                                
                                    
                                

                                    <td  style='height:20px; font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
                            
                                    $domainejour 
                                        
                                        
                                    </td>

                                    <td  style='height:20px;  font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:green; color:white; border-right:1px solid white;'>
                            
                                    $domainetot
                                        
                                        
                                    </td>
                                             
                            </tr>

                            <tr>
														
																				
                                <td  style='height:20px; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
                        
                                
                                    Nbre de comptes (<30J) et Expirés 
                                    
                                </td>
                                
                            
                                
                            

                                <td  style='height:20px; font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:yellow; border-right:1px solid white;'>
                        
                                $nbre
                                    
                                    
                                </td>

                                <td  style='height:20px;  font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:red; color:white; border-right:1px solid white;'>
                        
                                $nbreexpire
                                    
                                    
                                </td>
                                            
                            </tr>

									


									";
					?>
										
					
				</table>
		
		</body>
		
</html>
								
		
		