 <?php
		
			$nom=$_GET['nom'];
		    $prenom=$_GET['prenom'];
		    $postnom=$_GET['postnom'];
		    $sexe=$_GET['sexe'];
		    $dat=$_GET['dat'];
		    $province=$_GET['province'];
		    $ville=$_GET['ville'];
		    $marche=$_GET['marche'];
		    $telephone=$_GET['telephone'];
		    $tble=$_GET['tble'];

  ?>

		
			
		
					
		
<h2 style="text-align: center;">Nouveaux vendeurs</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title" style="text-align: center;v">
							
						</div>
						
						
					</div>
					
					<div class="panel-body">
					

						<form method="POST" action="menu/formulair.php" role="form" class="form-horizontal ">
			              
			              <input type="hidden" name="id" value="<?php echo"$id";?>" class="form-control" id="id"  placeholder="">

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Nom*</label>
								
								<div class="col-sm-5">
									<input type="text" name="nom" value="<?php echo"$nom";?>"class="form-control" id="field-1" placeholder="">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Postnom*</label>
								
								<div class="col-sm-5">
									<input type="text" name="postnom" value="<?php echo"$postnom";?>" class="form-control" id="field-1" placeholder="">
								</div>
							</div>
							
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Prenom*</label>
								
								<div class="col-sm-5">
									<input type="text" name="prenom" value="<?php echo"$prenom";?>" class="form-control" id="field-1" placeholder="">
								</div>
							</div>

                              	<div class="form-group">
								<label class="col-sm-3 control-label">Sexe*</label>
								
								<div class="col-sm-5">
									<select class="form-control" name="sexe" value="<?php echo"$sexe";?>" id="field-1" ><option value="masculin">Masculin</option><option value="femmin">Feminin</option></select> <!---->
								</div>
							</div>


							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Telephone*</label>
								
								<div class="col-sm-5">
									<input type="phone" name="telephone" value="<?php echo"$telephone";?>" class="form-control" id="field-1" placeholder="">
								</div>
							</div>
							
							
							
							
						
							
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Date de naissance*</label>
								
								<div class="col-sm-5">
									<input type="date" name="dat" value="<?php echo"$date";?>" class="form-control" id="field-1" placeholder="">
								</div>
							</div>
							
							
							
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Province*</label>
								
								<div class="col-sm-5">
									<input type="text" name="province" value="<?php echo"$province";?>" class="form-control" id="field-1" placeholder="">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Ville*</label>
								
								<div class="col-sm-5">
									<input type="text" name="ville" value="<?php echo"$ville";?>" class="form-control" id="field-1" placeholder="">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Marche*</label>
								
								<div class="col-sm-5">
									<input type="text" name="marche" value="<?php echo"$marche";?>" class="form-control" id="field-1" placeholder="">
								</div>
							</div>
							
						
								<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">N° table*</label>
								
								<div class="col-sm-5">
									<input type="text" name="tble" value="<?php echo"$tble";?>" class="form-control" id="field-1" placeholder="">
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
		