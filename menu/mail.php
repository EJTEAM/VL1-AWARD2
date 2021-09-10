
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title" style="text-align: center;v">
							
						</div>
						
						<h2 style="text-align: center;">Ecrivez votre message</h2>
					</div>
					
					<div class="panel-body" >

				<div class="col-md-3">
		    </div>

          <div class="col-md-6">

				<form method="post" action='corp.php?menu=sms' role="form">
						
	


						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-edit"></i>
								</div>
								
									<input type="text" name="expediteur" required="" class="form-control" id="expediteur" placeholder="Expediteur">
									<br><span style='color:red; display:none;' id=avexp> </span> 
								
							</div>
							</div>

							<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-edit"></i>
								</div>
								
								<select class="form-control" name="categorie" onchange="yannick(this.options[this.selectedIndex].value)" id="field-1">
								<option value="" selected>Choisir un destinateur</option>
								<option value="numero" >Envoyer a un numero</option>
								<option value="groupe" >Envoyer a un groupe</option>	
								
							</select>
					</div>
				</div>

						<div class="form-group"  id="design_numero" style='display:none;'>
							<div class="input-group"  >
								<div class="input-group-addon">
									<i class="entypo-phone"></i>
								</div>
								
									<input type="text" name="telephone" class="form-control" id="numero"  placeholder="Telephone" style="display:none;">
									<br><span style='color:red; display:none;' id=avnum> </span>
							</div>
							</div>
						
						<div class="form-group" id="design_groupe" style='display:none;'>
							<div class="input-group"  >
								<div class="input-group-addon">
									<i class="entypo-users"></i>
								</div>
							
									<!-- logo 
									<input type="text" name="commune" class="form-control" id="field-1" placeholder="">
								-->
								<select class="form-control" name="codegroupe" id="groupe" s>
								<option value="codegroupe" selected>Groupe</option>
								<?php 

								                              $pass=$_POST['pass'];
															  $login=$_POST['login'];
															  $id=$_SESSION['id'];
                                                               $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

                                                              $requet="SELECT * FROM `groupe` WHERE et_users=$id";
                                                              $resultat=$connexion->query($requet);
        
                                                                 $totcom=mysqli_num_rows($resultat);

                                                               $total=0;
                                                                 $i=0;
                                                                while($mes=mysqli_fetch_array($resultat))
                                                                 {
																	 $nom=$mes['nom'];
																	 $id=$mes['id'];
                                                                 	echo "<option value=$id>  $nom </option>";
                                     
                                                                  }
								 ?>
								
							  </select> <!---->
							
							</div>
							</div>
						
						<div class="compose-message-editor ">
							<textarea class="form-control wysihtml5" data-stylesheet-url="assets/css/wysihtml5-color.css" name="message" id="messages" rows="10"></textarea>
								<br>Nombre de caracteres :<span id=restant> 0 </span>
								<br>Nombre d'envois :  <span id=sms> 1 SMS </span> 
								<br><span style='color:red; display:none;' id=avertissement> </span> 
						</div>

                         
                         <button type="submit" class="btn btn-primary btn-icon">
                           Envoyez
                         <i class="entypo-mail"></i> </button>

						
						
					</form>

					</div>

					<div class="col-md-3">
	               </div>
				
				</div>
			
			</div>

			<SCRIPT TYPE="text/javascript">
 
				//Le message ne doit pas depasser 160 caracteres
				// $('#messages').keyup(function(evenement)
				// 	{
				// 		var nombreCaractere = $(this).val().length;
				// 		$('#restant').html(nombreCaractere);
				// 		if(nombreCaractere > 159) 
				// 			{
				// 				document.getElementById('messages').value =document.getElementById('messages').value.substring(0,160);
				// 				$('#avertissement').css('display','block');
				// 				$('#avertissement').html('Le message ne doit pas depasse 160 caracteres');
				// 			}		
				// });

				$('#messages').keyup(function(evenement)
					{
						var nombreCaractere = $(this).val().length;
						$('#restant').html(nombreCaractere);
						if(nombreCaractere <= 160)
							{
								$('#sms').html('1 SMS');
							}
						else if((nombreCaractere > 153) && (nombreCaractere <= 306))
							{
								$('#sms').html('2 SMS');
							}
						else if((nombreCaractere > 306) && (nombreCaractere <= 459))
							{
								$('#sms').html('3 SMS');
							}
						else if((nombreCaractere > 459) && (nombreCaractere <= 612))
							{
								$('#sms').html('4 SMS');
							}
						else if((nombreCaractere > 612) && (nombreCaractere <= 765))
							{
								$('#sms').html('5 SMS');
							}
						else if((nombreCaractere > 765) && (nombreCaractere <= 918))
							{
								$('#sms').html('6 SMS');
							}
						else if((nombreCaractere > 918) && (nombreCaractere <= 1071))
							{
								$('#sms').html('7 SMS');
							}
						else if((nombreCaractere > 1071) && (nombreCaractere <= 1224))
							{
								$('#sms').html('8 SMS');
							}
						else if((nombreCaractere > 1224) && (nombreCaractere <= 1377))
							{
								$('#sms').html('9 SMS');
							}
						else if((nombreCaractere > 1377) && (nombreCaractere <= 1530))
							{
								$('#sms').html('10 SMS');
							}
						
						else if(nombreCaractere > 1836) 
							{
								document.getElementById('messages').value =document.getElementById('messages').value.substring(0,1836);
								$('#avertissement').css('display','block');
								$('#avertissement').html('Le message ne doit pas depassé 1836 caractères ou 10 SMS.');
							}
						
							
					});
	




				//L'expediteur ne doit pas depasser 12 caracteres et ne doit pas contenir le blanc
				$('#expediteur').keyup(function(evenement)
					{
						var totalCaractere = $(this).val().length;
						//$('#restant').html(nombreCaractere);
						if(totalCaractere >12)
							{
								document.getElementById('expediteur').value =document.getElementById('expediteur').value.substring(0,12);
								$('#avexp').css('display','block');
								$('#avexp').html('Le champ expedtiteur ne doit pas contenir plus de 12 caract�res.');
							}
							
						// var codeTouche = evenement.which || evenement.keyCode;
				
						// if (codeTouche==32)
						// 	{
						// 		totalCaractere=totalCaractere-1;
						// 		document.getElementById('expediteur').value =document.getElementById('expediteur').value.substring(0,totalCaractere);
						// 		$('#avexp').css('display','block');
						// 		$('#avexp').html('Le champ expedtiteur ne doit pas contenir  de blanc ou espace vide.');
						// 	}
									
					});

					//Le numero telephone ne doit pas depasser 12 chiffres et ne doit pas contenir le blanc
					$('#numero').keyup(function(evenement)
						{
							var numeroCaractere = $(this).val().length;
							//$('#restant').html(nombreCaractere);
							if(numeroCaractere >12)
								{
									document.getElementById('numero').value =document.getElementById('numero').value.substring(0,12);
									$('#avnum').css('display','block');
									$('#avnum').html('Le champ numero ne doit pas contenir plus de 12 chiffres.');
								}
							
							if(numeroCaractere >=3)
								{ 
									var debut =document.getElementById('numero').value.substring(0,3);
								
									if(debut!=243)
										{
											numeroCaractere=numeroCaractere-3;
											document.getElementById('numero').value =document.getElementById('numero').value.substring(0,numeroCaractere);
											$('#avnum').css('display','block');
											$('#avnum').html('Le  numero de telephone  doit commencer par 243.');
										}
								}
							
							var nombre = document.getElementById('numero').value;
							if(isNaN(nombre) == true)
								{
									numeroCaractere=numeroCaractere-1;
									document.getElementById('numero').value =document.getElementById('numero').value.substring(0,numeroCaractere);
									$('#avnum').css('display','block');
									$('#avnum').html('Le champ numero doit contenir que des chiffres.');
								}
							
							var codeTouche = evenement.which || evenement.keyCode;
					
							if (codeTouche==32)
								{
									numeroCaractere=numeroCaractere-1;
									document.getElementById('numero').value =document.getElementById('numero').value.substring(0,numeroCaractere);
									$('#avnum').css('display','block');
									$('#avnum').html('Le champ numero doit contenir que de blanc ou espace vide.');
								}
						});	
	

	
	
</script>
 
		
		
	