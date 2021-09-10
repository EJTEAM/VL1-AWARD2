<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title" style="text-align: center;v">
							
						</div>
						
						<h2 style="text-align: center;">Tarifs des SMS</h2>
					</div>
					
					<div class="panel-body">
				<div class="col-md-3" >

						</div>
               <div class="col-md-6" id="step-1">
               <table class='table table-bordered '>
						<thead>

							<tr >
								<th style='text-align:center;'>Quantité</th>
								<th style='text-align:center;'>Prix unitt</th>
								<th  style='text-align:center;'>Total</th>
								<th style='text-align:center;'>Achat</th>
							</tr>
						</thead>


		
									 <?php

									 

					     $pass=$_POST['pass'];
					      $login=$_POST['login'];
					      $id=$_SESSION['id'];
					      $nom=$_SESSION['nom'];
					      $prenom=$_SESSION['prenom'];
					   


					    $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");


					  



					     $requet="SELECT * FROM `produits`";
					        $resultat=$connexion->query($requet);
					        
					        
					        $totcom=mysqli_num_rows($resultat);

					        $total=0;
					        $i=0;
					        while($mes=mysqli_fetch_array($resultat))
					          {
					          	++$i;
					          	$id=$mes['id'];
					           	$quantite=$mes['quantite'];
							    $prix_unit=$mes['prix_unit'];
							    $total=$mes['total'];
							   
						echo"
								<tbody>

							   
							   


					   
									<tr class='odd gradeX'>
										<td style='text-align:center;'>$quantite SMS</td>
										<td style='text-align:center;'>$prix_unit $</td>
										<td style='text-align:center;'>$total $</td>
										<td  style='text-align:center;'><a href='corp.php?menu=mmm&id=$id'><button type='button' data-loading-text='Loading...' class='btn btn-red'><i class='glyphicon glyphicon-shopping-cart'></i>
													Commander
												</button></a></td>
									   
									</tr>
							

									    ";
					            }

					         ?> 

							
								</tfoot>



								


							</table>
					</div>
					<div class="col-md-3" >
						</div>
					</div>
				
				</div>
			
			</div>

		</div>

