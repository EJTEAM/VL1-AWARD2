<form method="post" action="corp.php" role="form" >

<input type="hidden"  name="newuserfb"/>
				
				<div class="form-register-success">
					<i class="entypo-check"></i>
					<h3>You have been successfully registered.</h3>
					<p>We have emailed you the confirmation link for your account.</p>
				</div>
				
				<div class="form-steps">
					
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-phone"></i>
								</div>
								
								<input type="text" class="form-control" name="telephone" id="numero" required=""  placeholder="24381********" autocomplete="off" />
							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-success btn-block btn-login">
								<i class="entypo-right-open-mini"></i>
								Ajouter au compte
							</button>
						</div>
						
						
						
					</div>
					
				</div>
				
			</form>
			
			
			
           <SCRIPT TYPE="text/javascript">
 
				//Le message ne doit pas depasser 160 caracteres
			

			
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
							
							/*if(numeroCaractere >=3)
								{ 
									var debut =document.getElementById('numero').value.substring(0,3);
								
									if(debut!=243)
										{
											numeroCaractere=numeroCaractere-3;
											document.getElementById('numero').value =document.getElementById('numero').value.substring(0,numeroCaractere);
											$('#avnum').css('display','block');
											$('#avnum').html('Le  numero de telephone  doit commencer par 243.');
										}
								}*/
							
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