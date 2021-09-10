<?php
	$groupe=$_GET['nom'];
    
      $id=$_GET['id'];

  ?>


		
			
		
					
		
		
	<h2 style="text-align: center;">voulez-vous supprimer?</h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title" style="text-align: center;v">
							
						</div>
						
						
					</div>
					
					<div class="panel-body">
					

						<form method="POST" action="corp.php?menu=afcc" role="form" class="form-horizontal ">
			             

							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
								<input type="hidden" name="groupe" value="<?php echo"$groupe";?>" class="form-control" id="id"  placeholder="">

							<input type="hidden" name="id" value="<?php echo"$id";?>" class="form-control" id="id"  placeholder="">

							<h3 style="text-align: left;text-transform: lowercase; color: red;"> <?php echo"$groupe";?></h3>
							
								</div>
							</div>	
				
							

							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-danger">Supprimer</button>
								</div>
							</div>
						</form>
						
					</div>
				
				</div>
			
			</div