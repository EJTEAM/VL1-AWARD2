<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title" style="text-align: center;v">
							
						</div>
						
						<h2 style="text-align: center;">Ajouter un numero Mpesa</h2>
					</div>
					
					<div class="panel-body">
				<div class="col-md-3" >

						</div>
               <div class="col-md-6" id="step-1">
               	<form method="POST" action="corp.php?menu=mba" role="form">

			
                      	<input type="hidden" name="id" value="<?php echo"$id";?>" class="form-control" id="dis"  placeholder="">




						
								
								<?php
                                //$id=$_SESSION['id'];
                                      $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");
									//$email=$_SESSION['email'];
									$requettel="SELECT* FROM user  WHERE id='$id' ";						
									$resultattel=$connexion->query($requettel);
									$telmob=mysqli_fetch_array($resultattel);
									$telvodacom=$telmob['telephone'];
									// $telorange=$telmob['TelOrange'];
                                    // $telairtel=$telmob['TelAirtel'];
                                    
			                    ?>
									

                        <div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class=""> Vodacom Mpesa</i>
								</div>
								
								<input type="text" class="form-control" name='telephone'  value="<?php echo"$telvodacom";?>"  id="" placeholder="" d="" autocomplete="off">
							</div>
						</div>
			
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class=""> Orange Money</i>
								</div>
								
								<input type="text" class="form-control" name='telorange'  value=""  id="" placeholder="" d="" autocomplete="off" disabled>
							</div>
						</div>


					
						
						

                        <div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class=""> Airtel Money</i>
								</div>
								
								<input type="text" class="form-control" name='telairtel'  value=""  id="" placeholder="" d="" autocomplete="off" disabled>
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