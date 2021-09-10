 <?php
		
		 $id=$_GET['id'];
         


        $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

          //$id=$_POST['id'];

         $requet="SELECT*FROM membre WHERE id='$id'";

         $resultat=$connexion->query($requet);

         $affich=mysqli_fetch_array($resultat);
         	$nom=$affich['nom'];
         	$postnom=$affich['postnom'];
         	$prenom=$affich['prenom'];
         	$commune=$affich['commune'];
         	$sexe=$affich['sexe'];
         	$telephone=$affich['telephone'];
         	$numeroTable=$affich['numeroTable'];
         	$marche=$affich['marche'];
         

  ?>

<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title" style="text-align: center;">
							
						</div>
						
						<h2 style="text-align: center;">Modifier  membre</h2>
					</div>
					
					<div class="panel-body" >
					<div class="col-md-3">
                     </div>


                     <div class="col-md-6">
						<form method="POST" action="corp.php?menu=act" role="form" class="form-horizontal ">
			
							<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								      
								    <input type="hidden" class="form-control" name="id" value="<?php echo"$id";?>" required="" id="postnom" placeholder="id" d="" autocomplete="off">
									<input type="text-align" name="nom"  value="<?php echo"$nom";?>" class="form-control" id="field-1" placeholder="Nom">
								
							</div>
							</div>


                             <div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
									<input type="text" name="prenom"  value="<?php echo"$prenom";?>" class="form-control" id="field-1" placeholder="Prenom">
								
							</div>
							</div>
							
							

                        


							<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-phone"></i>
								</div>
								
								
								
									<input type="phone" name="telephone"  value="<?php echo"$telephone";?>" class="form-control" id="field-1" placeholder="Telephone">
								
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
								<option value="" selected>Groupe</option>
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
									<button type="submit" class="btn btn-success">Modifiér</button>
								</div>
							</div>
						</form>
						 
						 </div>
						 <div class="col-md-3">
                     </div>
					</div>
				
				</div>
			
			</div
		
	