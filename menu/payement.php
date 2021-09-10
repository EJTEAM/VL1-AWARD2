 
                      	
                              <div class="col-md-2">
                      	    </div>
                      	    <div class="col-md-8">
                      	
				           <div class="panel panel-primary" >
					
					
						
					
							<div class="panel-heading">
							<div><h2 style="text-align: center;"> Finalisez votre commande</h2></div>
											
											
							
					
				
					         <div class="panel-body">

					         	<table class="table table-bordered table-sm">
								  <thead>
								    <tr>
								         <th>1-Rappel de votre commande</th>
								     </tr>
								   </thead>
								      <tbody>
								        <tr>
								          <td>
								          
						
									<table class='table table-bordered '>
									<thead>

										<tr>
											<th>Quantité</th>
											<th>Prix unitt</th>
											<th >Total</th>
											
										</tr>
									</thead>

                                     


					                    

					                   
										
											<tbody>

                                             
                                      <?php
											require_once("menu/recuperertoken.php");
					                      

					                        $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

					                         $id=$_GET['id'];
												     $requet="SELECT * FROM `produits` WHERE id=$id";
												        $resultat=$connexion->query($requet);
												        
												        
												        $totcom=mysqli_fetch_array($resultat);
												        $id=$totcom['id'];
												        $quantite=$totcom['quantite'];
												        $prix_unit=$totcom['prix_unit'];
												        $total=$totcom['total'];
								           echo "
												<tr class='odd gradeX'>
													<td class='center'>$quantite SMS</td>
													<td>$prix_unit</td>
													<td>$total $</td>";
													
                                               ?> 
											
			                                     </tr>

												<tr >
													<td colspan="2" class='center' style="text-align: right;">Total HT</td>
													<td class='center'><?php echo"$total";  ?> $</td>
													
													

											
												 </tr>
												 
												 <tr >
													<td colspan="2" class='center' style="text-align: right;">TVA</td>
													<td class='center'>0 $</td>
													
													

											
			                                     </tr>


			                                     <tr >
													<td colspan="2" style="text-align: right;">Total TTC</td>
													<td ><?php echo"$total";  ?> $</td>
													
			                                     </tr>
										
											</tfoot>



											


							           </table>

                                </td>
							      </tr>
							     
							    </tbody>
							  </table>


						       <table class="table table-bordered table-sm">
						      <thead>
						        <tr>
						          <th>2-Choisissez votre mode de paiement</th>
						        </tr>
						      </thead>
						      <tbody>
						        <tr>
						          <td>

						<table class='table table-bordered '>
				
								<tbody>
					   
									<tr class='odd gradeX'>
										
							
										<td></td>
										

								
                                     </tr>

                                     	<tr >
										
										<td  class='center'>
											
											
									<label>
											<div  class="inlineimage">
											<?php echo"<a href='corp.php?menu=mpesa&token=$token&prix=$total&service=$quantite&productid=$id'><img    src='menu/mpesa.png'></a>";?>
											 
			                                    </div>
									</label>
										</td>
										
                                     </tr>


									<tr >
									
										<td>
                                          
                                             <label>
											<div  class="inlineimage">


											<script
    src="https://www.paypal.com/sdk/js?client-id=AbrLwN9H-g9AhJcMRGmvwvqW4sd6SMPjYlgnkY5Pcjw7HerwdF3_CscS_Jao40aP-aHgrdonP6nRTowW"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>


<div id="paypal-button-container"></div>



<script>
  //var montant =1;
  var montant = <?php echo json_encode($total); ?>;
  var quantite = <?php echo json_encode($quantite); ?>;
  var productid = <?php echo json_encode($id); ?>;
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: montant
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
		//alert('Transaction completed by ' + details.payer.name.given_name);
		var prenomsend=details.payer.name.given_name;
        var nomsend =details.payer.name.surname;
        window.location.href="https://sms.eliajimmy.net/paypal.php?productid="+productid+"&nom="+nomsend+"&prenom="+prenomsend;
       
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
</script>
										
										</div>
                                             </label>
										</td>
										
										

								
                                     </tr>


								


                                   
							
								</tfoot>



								


							</table>
                                  
                                
                                 <div class="col-md-2">
                                 	<a href='corp.php?menu=zd'><img    src='menu/cancel3.png'></a>
											 
								</div>
								   


							 </td>
							      </tr>
							     
							    </tbody>
							  </table>


							</div>
                             <div class="col-md-2">
                      	</div>