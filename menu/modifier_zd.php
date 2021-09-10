<?php
		
			$nom=$_GET['nom'];
		    $id=$_GET['id'];
		    
  ?>

<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title" style="text-align: center;v">
							
						</div>
						
						<h2 style="text-align: center;">Modifiér votre groupe</h2>
					</div>
					
					<div class="panel-body">
					    <div class="col-md-4" >
						</div>
                       <div class="col-md-4" >
                       <form method="POST" action="corp.php?menu=zd1" role="form" class="form-horizontal ">
			           

	                <input type="hidden" name="id" value="<?php echo"$id";?>" class="form-control" id="id"  placeholder="">
							
			
							<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-users"></i>
								</div>
								
									<input type="text" name="groupe"  value="<?php echo"$nom";?>" class="form-control" id="field-1" placeholder="Nom du groupe">
								
							</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-success">Enregistre</button>
								</div>
							</div>
						</form>
						
						</div>
						<div class="col-md-4" >
						</div>
					</div>
				
				</div>
			
			</div
		
	