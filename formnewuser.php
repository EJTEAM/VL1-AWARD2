<script type="text/javascript"> 
        function validate() { 
            var msg; 
            var str = document.getElementById("mdp").value; 
            if (str.match( /[0-9]/g) && 
                    str.match( /[A-Z]/g) && 
                    str.match(/[a-z]/g) && 
                    str.match( /[^a-zA-Z\d]/g) &&
                    str.length >= 8) 
               { //msg = "<p style='color:green'>Mot de passe fort.</p>"; 
                document.getElementById('theForm').submit();}
            else {
                msg = "<p style='color:white'>Le mot de passe doit contenir au minimum 8 caractères, des lettres en majuscule et minuscule, des chiffres et  caractères spéciaux comme ! @ # $ % ^ & * = + , . ; :.</p>"; 
            document.getElementById("msg").innerHTML= msg;} 
        } 
    </script> 

<form method="post" action="index.php" role="form" id="theForm"  >

<input type="hidden" name="newuser" id="newuser" />
				
				<div class="form-register-success">
					<i class="entypo-check"></i>
					<h3>You have been successfully registered.</h3>
					<p>We have emailed you the confirmation link for your account.</p>
				</div>
				
				<div class="form-steps">
					
					
					
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
							
								<input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" autocomplete="off" />
							</div>
						</div>
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="prenom" id="nom" placeholder="prenom" autocomplete="off" />
							</div>
						</div>
						
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-phone"></i>
								</div>
								
								<input type="text" class="form-control" name="telephone" id="telephone" placeholder="Votre numero" autocomplete="off" />
							</div>
						</div>
								
						
	
					
					
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-mail"></i>
								</div>
								
								<input type="email" class="form-control" name="email" id="email" placeholder="E-mail" autocomplete="off" />
							</div>
						</div>
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-lock"></i>
								</div>
								
								<div  >
                                <span id="msg"></span>
								</div>
								<input type="password" class="form-control" name="motpasse" required="" id="mdp" placeholder="mot de passe" autocomplete="off">
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
					</form>

                    </div>
                    
						<div class="form-group">
							<button type="submit" onclick="validate()" class="btn btn-success btn-block btn-login">
								<i class="entypo-right-open-mini"></i>
								Enregistrer
							</button>
						</div>
						
						
						
					</div>
			
			
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