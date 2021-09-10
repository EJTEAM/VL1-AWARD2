
					
	<?php
	$connexion= mysqli_connect("localhost","marcherd_recoltes","eliamaisongo@","marcherd_ejsarl");
    //$connexion= mysqli_connect("localhost","eliajimm_ejhost","j'utiliseLGsmartTV","eliajimm_payement");
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $postnom=$_POST['postnom'];
    $sexe=$_POST['sexe'];
    $datte=$_POST['datte'];
    $province=$_POST['province'];
    $ville=$_POST['ville'];
    $marche=$_POST['marche'];
    $telephone=$_POST['telephone'];
    $table=$_POST['table'];

//$requet="INSERT INTO identification(nom,prenom,adresse,telephone)VALUES('$nom','$prenom','$adresse','$telephone')";

    $requet="INSERT INTO client(nom,prenom,postnom,sexe,datte,province,ville,marche,telephone,table)VALUES('$nom','$prenom','$postnom','$sexe','$datte','$province','$ville','$marche','$telephone','$table')";
    $resultat=$connexion->query($requet)

    
	?>	
		
	<h2 style="text-align: center;">Profil utlisateur</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title" style="text-align: center;v">
							Nouveaux vendeurs
						</div>
						
						
					</div>
					
					<div class="panel-body">
					

						<form method="POST" action="formulair.php" role="form" class="form-horizontal ">
			
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Nom*</label>
								
								<div class="col-sm-5">
									<input type="text" name="nom" class="form-control" id="field-1" placeholder="">
								</div>
							</div>
							
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Prenom*</label>
								
								<div class="col-sm-5">
									<input type="text" name="prenom" class="form-control" id="field-1" placeholder="">
								</div>
							</div>

                              	<div class="form-group">
								<label class="col-sm-3 control-label">Forme juridique*</label>
								
								<div class="col-sm-5">
									<select class="form-control" name="sexe" id="field-1" ><option value="association">Masculin</option><option value="company">Feminin</option></select> <!---->
								</div>
							</div>


							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Telephone*</label>
								
								<div class="col-sm-5">
									<input type="phone" name="telephone" class="form-control" id="field-1" placeholder="">
								</div>
							</div>
							
							
							
							
						
							
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Date de naissance*</label>
								
								<div class="col-sm-5">
									<input type="date" name="datte" class="form-control" id="field-1" placeholder="">
								</div>
							</div>
							
							
							
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Province*</label>
								
								<div class="col-sm-5">
									<input type="text" name="province" class="form-control" id="field-1" placeholder="">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Ville*</label>
								
								<div class="col-sm-5">
									<input type="text" name="ville" class="form-control" id="field-1" placeholder="">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Marche*</label>
								
								<div class="col-sm-5">
									<input type="text" name="marche" class="form-control" id="field-1" placeholder="">
								</div>
							</div>
							
						
								<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">N° table*</label>
								
								<div class="col-sm-5">
									<input type="text" name="table" class="form-control" id="field-1" placeholder="">
								</div>
							</div>
								
							
						
							
							
							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-success">Enregistre</button>
								</div>
							</div>
						</form>
						
					</div>
				
				</div>
			
			</div
		
	