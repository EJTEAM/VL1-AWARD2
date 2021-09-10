 <?php
	$nom=$_GET['nom'];

    $prenom=$_GET['prenom'];
    $telephone=$_GET['telephone'];
      $id=$_GET['id'];

  ?>


		
			
		
					
		
		
	<h2 style="text-align: center; color: red;">Voulez – vous supprimer l’utilisateur </h2>
		<br />
		
		
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title" style="text-align: center;v">
							
						</div>
						
						
					</div>
					
					<div class="panel-body">
					

						<form method="POST" action="corp.php?menu=dlt" role="form" class="form-horizontal ">
			             

							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">

							<input type="hidden" name="id" value="<?php echo"$id";?>" class="form-control" id="id"  placeholder="">
                           
							<h3 style="text-align: center;text-transform: uppercase; color: red;"> <?php echo"$prenom";?>&nbsp;<?php echo"$nom";?>&nbsp;</h3>
							
								</div>

							</div>	
				
							<div class="form-row">
								<div class="col-sm-offset-4 col-sm-8">
									<button type="submit" class="btn btn-danger">&nbsp;Oui&nbsp;</button>
									<button type="submit" class="btn btn-Info"><a href="corp.php?menu=del">&nbsp;Non&nbsp;</a></button>
								</div>
							</div>							   
						</form>
						
					</div>
				
				</div>
			
			</div
		
	