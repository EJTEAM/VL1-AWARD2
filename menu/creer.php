<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title" style="text-align: center;v">
							
						</div>
						
						<h2 style="text-align: center;">Nouveau utilisateur</h2>
					</div>
					
					<div class="panel-body">
				<div class="col-md-3" >

						</div>
               <div class="col-md-6" id="step-1">
               	<form method="POST" action="corp.php?menu=insert" role="form">
				

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="nom" required="" id="nom" placeholder="Nom" d="" autocomplete="off">
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="postnom" required="" id="postnom" placeholder="Postnom" d="" autocomplete="off">
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="prenom" required="" id="prenom" placeholder="Prenom" d="" autocomplete="off">
							</div>
						</div>
					
						<div class="form-group">
							<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-mail"></i>
						</div>
						
						<input type="text" class="form-control" name="email" required="" id="username" placeholder="Votre adresse email" autocomplete="off">
					</div></div>
					
					<div class="form-group"  id="design_numero" >
							<div class="input-group"  >
								<div class="input-group-addon">
									<i class="entypo-phone"></i>
								</div>
								
									<input type="text" name="telephone" class="form-control" id="numero" placeholder="Telephone" style="">
									<br><span style='' id=avnum> </span>
							</div>
							</div>	
			
						
						
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-lock"></i>
								</div>
								
								<input type="password" class="form-control" name="motpasse" required="" id="password" placeholder="mot de passe" autocomplete="off">
							</div>
						</div>


						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-lock"></i>
								</div>

								<div id="cmp">
									
								</div>
								
								<input type="password" class="form-control" name="confirmermotpasse" required="" id="confirmerpassword" placeholder="Confirmer mot de passe" autocomplete="off">
							</div>
						</div>

						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-cc-by"></i>
								</div>
								
								
									<select class="form-control" name="types" id="field-1" >
									<option value="Invite">Invite</option>
									<option value="Admin">Admin</option>
									</select> <!---->
								
							</div>
							</div>
						

						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-success btn-block btn-login">
								<i class="entypo-right-open-mini"></i>
								Enregistrer
							</button>
						</div>
						</div>
						</form>
					</div>
					<div class="col-md-3" >
						</div>
					</div>
				
				</div>
			
			</div>

		</div>

		<SCRIPT TYPE="text/javascript">

$('#confirmerpassword').keyup(function(evenement)
	{
			var password = $('#password').val();
			var confirmerpassword = $('#confirmerpassword').val();



			if(password==confirmerpassword)
				{
					//alert('Mot de passe identique');
					$('#cmp').css('background','green');
					$('#cmp').css('color','white');
					$('#cmp').css('padding','5px');
					$('#cmp').html('Mot de passe Identique');
				}
			else
				{
					//alert('Mot de passe non identique');
					$('#cmp').css('background','red');
					$('#cmp').css('color','white');
					$('#cmp').css('padding','5px');
					$('#cmp').html('Mot de passe incorrect');
				}

			

	}
	
)


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
		