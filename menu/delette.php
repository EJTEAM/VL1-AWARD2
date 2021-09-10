 <?php
	$nom=$_GET['nom'];
    $postnom=$_GET['postnom'];
    $prenom=$_GET['prenom'];
     $sexe=$_GET['sexe'];
     $numeroTable=$_GET['numeroTable'];
     $telephone=$_GET['telephone'];
      $id=$_GET['id'];

  ?>


		
			
		
					
		
		
	<h2 style="text-align: center;">voulez-vous supprimé ?</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title" style="text-align: center;v">
							
						</div>
						
						
					</div>
					
					<div class="panel-body">
					

						<form method="POST" action="corp.php?menu=su" role="form" class="form-horizontal ">
			             

							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">

							<input type="hidden" name="id" value="<?php echo"$id";?>" class="form-control" id="id"  placeholder="">

							<h3 style="text-align: left;text-transform: lowercase; color: red;"> <?php echo"$nom";?>&nbsp;<?php echo"$postnom";?>&nbsp;<?php echo"$prenom";?></h3>
							
								</div>
							</div>	
				
							

							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-danger">OUI</button>
								</div>
							</div>

						            <div class="col-md-3">
									
						           </div>
								   <div class="col-md-3">
									<button class="btn btn-info" style="text-align: center;"><a href="corp.php?menu=vs">Non</a></button>
						           </div>
						            <div class="col-md-3">
									
						           </div>
						
						</form>
						
					</div>
				
				</div>
			
			</div
		
	