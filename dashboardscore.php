
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
										
												
						<th style='height:20px; font-size:13pt; width:50%; border-bottom:1px solid #c0c0c0; text-align:center; background:#e9e8e8;'>
						
							EJ SCORE
							
						</th>
					

						<th style='height:20px; font-size:13pt; width:15%; border-bottom:1px solid #c0c0c0; text-align:center; background:#e9e8e8;'>
						
							Now
							
						</th>

						<th style='height:20px; font-size:13pt; width:15%; border-bottom:1px solid #c0c0c0; text-align:center; background:#e9e8e8;'>
						
							New
							
						</th>

						<th style='height:20px; font-size:13pt;  width:20%; border-bottom:1px solid #c0c0c0; text-align:center; background:#e9e8e8;'>
						
							Lastime
							
						</th>
											
																					
					</tr>
					
					<?php

						$today = date("H:i:s");
						$heure=substr($today,0,2);
						$minutes=substr($today,2);
						$heure=$heure+1;
						$today=$heure.$minutes;
						$dates = date("d-m-Y");
						
					
						require_once("parifoot/Connect.php");
						
							
						$connexion = mysqli_connect(SERVEUR, NOM, PASSE, ABASE);
						
						// $requete="SELECT Status, StatusText, COUNT (Status) AS totalStatus FROM  bilingVodacom  GROUP BY Status";
						
						// $requete_championnat="SELECT ordreEnvoi, COUNT(ordreEnvoi) AS totalStatus FROM abonnechampionnat WHERE abonnement='OUI' AND matchDuJour='OUI' AND actif='OUI' GROUP BY ordreEnvoi ";

						//RECUPERER USSD VODACOM
						$requete_mpesa_rec_ussd="SELECT * FROM `monitoringSCORE` WHERE code=8";
						$resultat_mpesa_ussd_rec=$connexion->query($requete_mpesa_rec_ussd);												
						$ussdmpesa=mysqli_fetch_array($resultat_mpesa_ussd_rec);
						$lastussdmpesa=$ussdmpesa['last'];
						$nowussdmpesa=$ussdmpesa['now'];
						$diffussdmpesa=$ussdmpesa['difference'];
						$couleurussdmpesa=$ussdmpesa['codecouleur'];
						$timempesaussd=$ussdmpesa['lasttime'];

						//RECUPERER USSD VL1
						$requete_vl1_ussd="SELECT * FROM `monitoringSCORE` WHERE code=5";
						$resultat_vl1_ussd=$connexion->query($requete_vl1_ussd);												
						$ussdvl1=mysqli_fetch_array($resultat_vl1_ussd);
						$lastussdvl1=$ussdvl1['last'];
						$nowussdvl1=$ussdvl1['now'];
						$diffussdvl1=$ussdvl1['difference'];
						$couleurussdvl1=$ussdvl1['codecouleur'];
						$timevl1ussd=$ussdvl1['lasttime'];

				
						//RECUPERER billing Africell
						$requete_mpesa_rec_bill="SELECT * FROM `monitoringSCORE` WHERE code=7";
						$resultat_mpesa_bill_rec=$connexion->query($requete_mpesa_rec_bill);												
						$billmpesa=mysqli_fetch_array($resultat_mpesa_bill_rec);
						$lastbillmpesa=$billmpesa['last'];
						$nowbillmpesa=$billmpesa['now'];
						$diffbillmpesa=$billmpesa['difference'];
						$couleurbillmpesa=$billmpesa['codecouleur'];
						$timempesabill=$billmpesa['lasttime'];


						//RECUPERER USSD VODACOM
						$requete_vod_rec_ussd="SELECT * FROM `monitoringSCORE` WHERE code=1";
						$resultat_vod_ussd_rec=$connexion->query($requete_vod_rec_ussd);												
						$ussdvod=mysqli_fetch_array($resultat_vod_ussd_rec);
						$lastussdvod=$ussdvod['last'];
						$nowussdvod=$ussdvod['now'];
						$diffussdvod=$ussdvod['difference'];
						$couleurussdvod=$ussdvod['codecouleur'];
						$timevodussd=$ussdvod['lasttime'];

						//RECUPERER billing VODACOM
						$requete_vod_rec_bill="SELECT * FROM `monitoringSCORE` WHERE code=3";
						$resultat_vod_bill_rec=$connexion->query($requete_vod_rec_bill);												
						$billvod=mysqli_fetch_array($resultat_vod_bill_rec);
						$lastbillvod=$billvod['last'];
						$nowbillvod=$billvod['now'];
						$diffbillvod=$billvod['difference'];
						$couleurbillvod=$billvod['codecouleur'];
						$timevodbill=$billvod['lasttime'];


						//RECUPERER billing Africell
						$requete_afr_rec_bill="SELECT * FROM `monitoringSCORE` WHERE code=4";
						$resultat_afr_bill_rec=$connexion->query($requete_afr_rec_bill);												
						$billafr=mysqli_fetch_array($resultat_afr_bill_rec);
						$lastbillafr=$billafr['last'];
						$nowbillafr=$billafr['now'];
						$diffbillafr=$billafr['difference'];
						$couleurbillafr=$billafr['codecouleur'];
						$timeafrbill=$billafr['lasttime'];

						//RECUPERER billing Africell
						$requete_vl1_rec_bill="SELECT * FROM `monitoringSCORE` WHERE code=6";
						$resultat_vl1_bill_rec=$connexion->query($requete_vl1_rec_bill);												
						$billvl1=mysqli_fetch_array($resultat_vl1_bill_rec);
						$lastbillvl1=$billvl1['last'];
						$nowbillvl1=$billvl1['now'];
						$diffbillvl1=$billvl1['difference'];
						$couleurbillvl1=$billvl1['codecouleur'];
						$timevl1bill=$billvl1['lasttime'];

						
						//RECUPERER USSD AFRICELL
						$requete_afr_rec_ussd="SELECT * FROM `monitoringSCORE` WHERE code=2";
						$resultat_afr_ussd_rec=$connexion->query($requete_afr_rec_ussd);												
						$ussdafr=mysqli_fetch_array($resultat_afr_ussd_rec);
						$lastussdafr=$ussdafr['last'];
						$nowussdafr=$ussdafr['now'];
						$diffussdafr=$ussdafr['difference'];
						$couleurussdafr=$ussdafr['codecouleur'];
						$timeafriussd=$ussdafr['lasttime'];

						//RECUPERER MO VODACOM
						$requete_afr_rec_MO="SELECT * FROM `monitoringSCORE` WHERE code=15";
						$resultat_afr_ussd_MO=$connexion->query($requete_afr_rec_MO);												
						$ussdaMO=mysqli_fetch_array($resultat_afr_ussd_MO);
						$lastussdMO=$ussdaMO['last'];
						$nowussdMO=$ussdaMO['now'];
						$diffussdMO=$ussdaMO['difference'];
						$couleurussdMO=$ussdaMO['codecouleur'];
						$timeafriussdMO=$ussdaMO['lasttime'];
						
								
								echo"
									<tr>
														
																				
										<td  style='height:20px; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
									        Direct Vodacom
											
										</td>
										
									
										<td style='height:20px;  text-align:center; font-size:13pt;  border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$nowussdvod
											
										</td>

										<td width=5% style='height:20px;  text-align:center; font-size:13pt;  width:20px; border-bottom:1px solid #c0c0c0; background:$couleurussdvod; border-right:1px solid white; color:white;'>
								
										
											$diffussdvod
											
										</td>

										<td width=5% style='height:20px;  text-align:center; font-size:13pt;  width:20px; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$timevodussd
											
										</td>
										
										
										
																			
										
															
																				
									</tr>
								
						<tr>
														
																				
										<td  style='height:20px; font-size:13pt;   border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											Direct Africell
											
										</td>
										
									
	

										<td  style='height:20px;  text-align:center;  font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$nowussdafr
											
										</td>

										<td  style='height:20px;  text-align:center; font-size:13pt;border-bottom:1px solid #c0c0c0; background:$couleurussdafr; color:white; border-right:1px solid white;'>
								
										
											$diffussdafr
											
										</td>	

										<td  style='height:20px;  text-align:center; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$timeafriussd
											
										</td>

										
																				
									</tr>

									<tr>
														
																				
										<td  style='height:20px;  font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											Direct VL1
											
										</td>
										
									
										

										<td  style='height:20px;   text-align:center; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$nowussdvl1
											
										</td>

										<td  style='height:20px;  text-align:center;  font-size:13pt; border-bottom:1px solid #c0c0c0; background:$couleurussdvl1; color:white; border-right:1px solid white;'>
								
										
											$diffussdvl1
											
										</td>	

										<td  style='height:20px;   text-align:center; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$timevl1ussd
											
										</td>

										
																				
									</tr>

									<tr>
														
																				
										<td width=5% style='height:20px; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											Parieur MPESA
											
										</td>
									

										<td width=5% style='height:20px;  text-align:center; font-size:13pt;  border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$nowbillmpesa
											
										</td>

										<td width=5% style='height:20px;  text-align:center; font-size:13pt; border-bottom:1px solid #c0c0c0; background:$couleurbillmpesa; border-right:1px solid white; color:white;'>
								
										
											$diffbillmpesa
											
										</td>

										<td width=5% style='height:20px;   text-align:center; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$timevodussd
											
										</td>
															
									</tr>

									<tr>
														
																				
										<td width=5% style='height:20px;  font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											 MT Vodacom
											
										</td>
										
										

										<td style='height:20px;  text-align:center; font-size:13pt;border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$nowbillvod
											
										</td>

										<td style='height:20px;  text-align:center; font-size:13pt; border-bottom:1px solid #c0c0c0; background:$couleurbillvod; border-right:1px solid white; color:white;'>
								
										
											$diffbillvod
											
										</td>


										<td  style='height:20px;  text-align:center; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$timevodussd
											
										</td>
															
									</tr>
								
									<tr>
														
																				
										<td  style='height:20px;  font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											MT Africell
											
										</td>
										
									
										
									

										<td  style='height:20px; font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$nowbillafr
											
										</td>

										<td  style='height:20px; font-size:13pt; text-align:center;  border-bottom:1px solid #c0c0c0; background:$couleurbillafr; color:white; border-right:1px solid white;'>
								
										
											$diffbillafr
											
										</td>

										<td  style='height:20px;  font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$timeafrbill
											
										</td>	

										
																				
									</tr>

									<tr>
														
																				
										<td  style='height:20px; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											MT VL1
											
										</td>
										
									
										
									

										<td  style='height:20px; font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$nowbillvl1
											
										</td>

										<td  style='height:20px;  font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:$couleurbillvl1; color:white; border-right:1px solid white;'>
								
										
											$diffbillvl1
											
										</td>

										<td  style='height:20px;  font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$timevl1bill
											
										</td>	

										
																				
									</tr>
									
										<tr>
														
																				
										<td  style='height:20px; font-size:13pt; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											MO Vodacom
											
										</td>
										
									
										
									

										<td  style='height:20px; font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
											$nowussdMO
										
											
										</td>

										<td  style='height:20px;  font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:$couleurussdMO; color:white; border-right:1px solid white;'>
								
							
						$diffussdMO
										
											
										</td>

										<td  style='height:20px;  font-size:13pt;  text-align:center; border-bottom:1px solid #c0c0c0; background:white; border-right:1px solid white;'>
								
										
									
										$timeafriussdMO
											
										</td>	

										
																				
									</tr>

									

									


									";
					?>
										
					
				</table>
		
		</body>
		
</html>
								
		
		