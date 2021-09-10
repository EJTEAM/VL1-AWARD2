
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
						
							EJ PAY
							
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

    $requettt="SELECT * FROM `commande` WHERE statut='ACTIF' AND com_produit<5";
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


   
		

						
								
								echo"
									<tr>
														
																				
										<td  style='height:18px; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
									       Nbre de Transfert local Mobile
											
										</td>
										
									
										<td style='height:18px;  text-align:center; font-size:13pt;  border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
                                       
											
										</td>

										<td width=5% style='height:18px;  text-align:center; font-size:13pt;  width:20px; border-bottom:1px solid #c0c0c0; background:green; border-right:1px solid white; color:white;'>
								
										
                                      
											
										</td>

									
										
										
																			
										
															
																				
									</tr>
								
						

									<tr>
														
																				
										<td width=5% style='height:18px;  font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
                                        Nbre de Transfert Internat. Mobile
											
										</td>
										
										

										<td style='height:18px;  text-align:center; font-size:13pt;border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											
											
										</td>

										<td style='height:18px;  text-align:center; font-size:13pt; border-bottom:1px solid #c0c0c0; background:green; border-right:1px solid white; color:white;'>
								
										
                                        
											
										</td>


									
															
									</tr>
								
									<tr>
														
																				
										<td  style='height:18px;  font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
                                        Nbre de Transfert internat. Western
											
										</td>
										
									
										
									

										<td  style='height:18px; font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											
											
										</td>

										<td  style='height:18px; font-size:13pt; text-align:center;  border-bottom:1px solid #c0c0c0; background:green; color:white; border-right:1px solid white;'>
								
										
											
											
										</td>

										

										
																				
									</tr>

									<tr>
														
																				
										<td  style='height:18px; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
                                        Nbre de conv. locale to Internat.
											
										</td>
										
									
										
									

										<td  style='height:18px; font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											
											
										</td>

										<td  style='height:18px;  font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:green; color:white; border-right:1px solid white;'>
								
										
											
											
										</td>
											
									</tr>

									<tr>
														
																				
										<td  style='height:18px; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
                                        Nbre de conv. internat. to locale 
                                       
											
										</td>
										
									
										
									

										<td  style='height:18px; font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
                                       
											
										</td>

										<td  style='height:18px;  font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:green; color:white; border-right:1px solid white;'>
								
										
											
										
											
										</td>

									

										
																				
                                    </tr>
                                    
                                    <tr>
														
																				
                                    <td  style='height:18px; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
                            
                                    Nbre de prepaids card
                                   
                                        
                                    </td>
                                    
                                
                                    
                                

                                    <td  style='height:18px; font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
                            
                                    
                                        
                                        
                                    </td>

                                    <td  style='height:18px;  font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:green; color:white; border-right:1px solid white;'>
                            
                                   
                                        
                                        
                                    </td>

                                

                                    
                                                                            
                                </tr>

									


									";
					?>
										
					
				</table>
		
		</body>
		
</html>
								
		
		