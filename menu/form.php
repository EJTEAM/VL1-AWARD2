

	
	
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title" style="text-align: center;v">
							
						</div>
						
						<h2 style="text-align: center;">Ajouter un membre </h2>
					</div>
					
					<div class="panel-body" >
					<div class="col-md-3">
                     </div>


                     <div class="col-md-6">
						<form method="POST" action="corp.php?menu=iv" role="form" class="form-horizontal" enctype="multipart/form-data">
			
							<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
									<input type="text" name="prenom" class="form-control" id="field-1" placeholder="Prenom">
								
							</div>
							</div>


                           
							
							<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
									<input type="text" name="nom" class="form-control" id="field-1" placeholder="Nom">
								
							</div>
							</div>

                              	
								


							<div class="form-group" id="design_numero">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-phone"></i>
								</div>
								
								
								
									<input type="text" name="telephone" class="form-control" id="numero" placeholder="Telephone" style="">
								

									
								
							</div>
							</div>
							
							
							<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-users"></i>
								</div>
							
									<!-- logo 
									<input type="text" name="commune" class="form-control" id="field-1" placeholder="">
								-->
								<select class="form-control" name="codegroupe" id="id" >
								<option value="" selected>--Groupe--</option>
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
                                                                 	echo "<option value='$id'>$nom </option>";
                                     
                                                                  }
                                                                  mysqli_close($connex);
								 ?>
								
							  </select> <!---->
							
							</div>
							</div>

						
						
								
							
						
							
							
							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-success">Enregistre</button>
								</div>
							</div>
						</form>
						 
						 </div>
						 <div class="col-md-3">
                     </div>
					</div>
				
				</div>
			
			</div>
			
			
			
           <SCRIPT TYPE="text/javascript">
 
				//Le message ne doit pas depasser 160 caracteres
				$('#messages').keyup(function(evenement)
					{
						var nombreCaractere = $(this).val().length;
						$('#restant').html(nombreCaractere);
						if(nombreCaractere > 159) 
							{
								document.getElementById('messages').value =document.getElementById('messages').value.substring(0,160);
								$('#avertissement').css('display','block');
								$('#avertissement').html('Le message ne doit pas depasse 160 caracteres');
							}		
				});

				//L'expediteur ne doit pas depasser 12 caracteres et ne doit pas contenir le blanc
				$('#expediteur').keyup(function(evenement)
					{
						var totalCaractere = $(this).val().length;
						//$('#restant').html(nombreCaractere);
						if(totalCaractere >=12)
							{
								document.getElementById('expediteur').value =document.getElementById('expediteur').value.substring(0,12);
								$('#avexp').css('display','block');
								$('#avexp').html('Le champ expedtiteur ne doit pas contenir plus de 12 caract�res.');
							}
							
						var codeTouche = evenement.which || evenement.keyCode;
				
						if (codeTouche==32)
							{
								totalCaractere=totalCaractere-1;
								document.getElementById('expediteur').value =document.getElementById('expediteur').value.substring(0,totalCaractere);
								$('#avexp').css('display','block');
								$('#avexp').html('Le champ expedtiteur ne doit pas contenir  de blanc ou espace vide.');
							}
									
					});

					//Le numero telephone ne doit pas depasser 12 chiffres et ne doit pas contenir le blanc
					$('#numero').keyup(function(evenement)
						{
							var numeroCaractere = $(this).val().length;
							//$('#restant').html(nombreCaractere);
							if(numeroCaractere >=12)
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
 
	