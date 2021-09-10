 <?php

        
           $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

         $requet="SELECT*FROM user WHERE id='$id'";

         $resultat=$connexion->query($requet);

         $affich=mysqli_fetch_array($resultat);
         
         	$nom=$affich['nom'];
         	$postnom=$affich['postnom'];
         	$prenom=$affich['prenom'];
         	$email=$affich['email'];
         	$motpasse=$affich['motpasse'];
         	$types=$affich['types'];
         	$telephone=$affich['telephone'];
         

  ?>


<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title" style="text-align: center;v">
							
						</div>
						
						<h2 style="text-align: center;">Modifier profil</h2>
					</div>
					
					<div class="panel-body">
				<div class="col-md-3" >

						</div>
               <div class="col-md-6" id="step-1">
               	<form method="POST" action="corp.php?menu=pfl" role="form">

				<input type="hidden" name="id" value="<?php echo"$id";?>" class="form-control" id="id"  placeholder="">
 
                       <div class="form-group" style='display:none;'>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="hidden" class="form-control" name="id" value="<?php echo"$id";?>" required="" id="postnom" placeholder="id" d="" autocomplete="off">
							</div>
						</div>




						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="nom" required="" id="nom" placeholder="Nom"  value="<?php echo"$nom";?>" d="" autocomplete="off">
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="postnom" value="<?php echo"$postnom";?>" required="" id="postnom" placeholder="Postnom" d="" autocomplete="off">
							</div>
						</div>

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="prenom" required="" id="prenom" placeholder="Prenom" value="<?php echo"$prenom";?>" d="" autocomplete="off">
							</div>
						</div>
					
						<div class="form-group">
							<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-mail"></i>
						</div>
						
						<input type="text" class="form-control" name="email" value="<?php echo"$email";?>" required="" id="username" placeholder="Votre adresse email" autocomplete="off">
					</div></div>
					
						
			
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-phone"></i>
								</div>
								
								<input type="text" class="form-control" name="telephone" value="<?php echo"$telephone";?>" id="phone" placeholder="telephone" data-mask="phone" autocomplete="off">
							</div>
						</div>
					
						
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-lock"></i>
								</div>
								
								<input type="password" class="form-control" name="motpasse" value="<?php echo"$motpasse";?>" required="" id="password" placeholder="mot de passe" autocomplete="off">
							</div>
						</div>


						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-lock"></i>
								</div>

								<div id="cmp">
									
								</div>
								
								<input type="password" class="form-control" name="confirmermotpasse"value="<?php echo"$motpasse";?>"  required="" id="confirmerpassword" placeholder="Confirmer mot de passe" autocomplete="off">
							</div>
						</div>

						
						
						

						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-success btn-block btn-login">
								<i class="entypo-right-open-mini"></i>
								Modifier
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

		</script>
		