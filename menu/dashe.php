<script type="text/javascript">
		jQuery(document).ready(function($)
		{
			// Sample Toastr Notification
			setTimeout(function()
			{
				var opts = {
					"closeButton": true,
					"debug": false,
					"positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
					"toastClass": "black",
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "5000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				};
		
				toastr.success("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);
			}, 3000);
		
		
			// Sparkline Charts
			$('.inlinebar').sparkline('html', {type: 'bar', barColor: '#ff6264'} );
			$('.inlinebar-2').sparkline('html', {type: 'bar', barColor: '#445982'} );
			$('.inlinebar-3').sparkline('html', {type: 'bar', barColor: '#00b19d'} );
			$('.bar').sparkline([ [1,4], [2, 3], [3, 2], [4, 1] ], { type: 'bar' });
			$('.pie').sparkline('html', {type: 'pie',borderWidth: 0, sliceColors: ['#3d4554', '#ee4749','#00b19d']});
			$('.linechart').sparkline();
			$('.pageviews').sparkline('html', {type: 'bar', height: '30px', barColor: '#ff6264'} );
			$('.uniquevisitors').sparkline('html', {type: 'bar', height: '30px', barColor: '#00b19d'} );
		
		
			$(".monthly-sales").sparkline([1,2,3,5,6,7,2,3,3,4,3,5,7,2,4,3,5,4,5,6,3,2], {
				type: 'bar',
				barColor: '#485671',
				height: '80px',
				barWidth: 10,
				barSpacing: 2
			});
		
		
			// JVector Maps
			var map = $("#map");
		
			map.vectorMap({
				map: 'europe_merc_en',
				zoomMin: '3',
				backgroundColor: '#383f47',
				focusOn: { x: 0.5, y: 0.8, scale: 3 }
			});
		
		
		
		
			var seriesData = [ [], [] ];
		
			var random = new Rickshaw.Fixtures.RandomData(50);
		
			for (var i = 0; i < 50; i++)
			{
				random.addData(seriesData);
			}
		
			var graph = new Rickshaw.Graph( {
				element: document.getElementById("rickshaw-chart-demo"),
				height: 193,
				renderer: 'area',
				stroke: false,
				preserve: true,
				series: [{
						color: '#73c8ff',
						data: seriesData[0],
						name: 'Upload'
					}, {
						color: '#e0f2ff',
						data: seriesData[1],
						name: 'Download'
					}
				]
			} );
		
		
		//}
		</script>
		
		<?php
					/*			$id=$_SESSION['id'];

								$connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");
								
								$requetecom="SELECT *FROM commande WHERE com_client=$id AND etat_paie='OUI' ORDER BY id DESC";
								$resultatcom=$connexion->query($requetecom);
								$lastsave=mysqli_fetch_array($resultatcom);
								$productid=$lastsave['com_produit'];

								$requetepro="SELECT *FROM produits WHERE id=$productid";
								$resultatpro=$connexion->query($requetepro);
								$prod=mysqli_fetch_array($resultatpro);
								$quantite=$prod['quantite'];


								
								
							
							*/?>
		
<div class="row">
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-red">
					<div class="icon"><i class="entypo-chart-bar"></i></div>
                     <div class="num" data-start="0" data-end="<?php echo "$quantite_achetee"  ?>" data-postfix="" data-duration="1500" data-delay="1800">0</div>
					
		
					<h3>Nombre total de SMS achetés</h3>
					
				</div>
		
			</div>
		
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-chart-bar"></i></div>
					<div class="num" data-start="0" data-end="<?php echo $quantite;  ?>" data-postfix="" data-duration="1500" data-delay="600">0</div>
		
					<h3>Nouveaux SMS achetés</h3>
					
				</div>
		
			</div>
			
			<div class="clear visible-xs"></div>
		
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-aqua">
					<div class="icon"><i class="entypo-users"></i></div>
					<div class="num" data-start="0" data-end="<?php echo $quantite_consommee;  ?>" data-postfix="" data-duration="1500" data-delay="1800">0</div>

					
					
		
					<h3>Nombre total de SMS utilisés</h3>
					
				</div>
		
			</div>
		
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-blue">
					<div class="icon"><i class="entypo-users"></i></div>
					<div class="num" data-start="0" data-end="<?php echo $solde_restant;  ?>" data-postfix="" data-duration="1500" data-delay="1800">0</div>
		
					<h3>Nombre total de SMS restants </h3>
					
				</div>
		
			</div>
		</div>
		
		<br />
		
			
		
		
			<div class="col-sm-12">
			    
			   <div class="col-md-6" >
			       
			       <div class="panel panel-primary">
					<div class="panel-heading">
						<div class="panel-title">Historique</div>
		
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
		             
		             	<script type="text/javascript">
                    		jQuery( document ).ready( function( $ ) {
                    			var $table1 = jQuery( '#table-1' );
                    			
                    			// Initialize DataTable
                    			$table1.DataTable( {
                    				"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    				"bStateSave": true
                    			});
                    			
                    			// Initalize Select Dropdown after DataTables is created
                    			$table1.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
                    				minimumResultsForSearch: -1
                    			});
                    		} );
                    		</script>
					<table class="table table-bordered datatable" id="table-1">
						<thead>
							<tr>
								<th>#</th>
								<th>Total Envoyé</th>
								<th>Total Reçu</th>
								<th>Date</th>
								<th>Heure</th>
								
							</tr>
						</thead>
					
											<tbody>
												<?
						/*	
                            $ids=$_SESSION['id'];
							$connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

							$requetes="SELECT id,`iduser`, `dates`, `heure`, SUM(`nombreSMS`) AS qte FROM `rapport` WHERE `iduser`=$ids AND statut='Success'  GROUP BY `dates` ORDER BY id DESC";
							   
							$resultates=$connexion->query($requetes);

							

   							//$totcom=mysqli_num_rows($resultat);
							$i=0;
							while($mes=mysqli_fetch_array($resultates))
								{
									

									++$i;
		 							$dates=$mes['dates'];
									$heure=$mes['heure'];
									$qte=$mes['qte'];
									  
									$requetess="SELECT  COUNT(`status`) AS qtedelivrer, SUM(`nombreSMS`) AS qtdlv  FROM `rapport` WHERE `iduser`=$ids AND status='DELIVRD' AND `dates`='$dates'   GROUP BY `status` ORDER BY id DESC";
									$resultatess=$connexion->query($requetess);
									$mess=mysqli_fetch_array($resultatess);
									$qtedelivrer=$mess['qtdlv'];
	
									echo"
												<tr>
												<td>$i</td>
													<td>$qte</td>
													<td>$qtedelivrer</td>
													<td>$dates</td>
													<td>$heure</td>
													

												</tr>
															";
								}*/?>

											</tbody>
							
					</table>
			     	</div>  
			      </div>
		       <div class="col-md-6" id="step-1">
		      <div class="panel panel-primary">
		          
		      <h2 style="text-align: center;font-size: 12px;">Tarifs des SMS</h2>
               <table class='table table-bordered table-responsive'>
						<thead>

							<tr >
								<th style='text-align:center;'>Quantité</th>
								<th style='text-align:center;'>Prix unitt</th>
								<th  style='text-align:center;'>Total</th>
								<th style='text-align:center;'>Achat</th>
							</tr>
						</thead>


		
									 <?php
/*
									 

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
*/
					         ?> 

							
								</tfoot>



								


							</table>
					</div>
					
				</div> 
			
	
</div>
		
		<script type="text/javascript">
			// Code used to add Todo Tasks
			jQuery(document).ready(function($)
			{
				var $todo_tasks = $("#todo_tasks");
		
				$todo_tasks.find('input[type="text"]').on('keydown', function(ev)
				{
					if(ev.keyCode == 13)
					{
						ev.preventDefault();
		
						if($.trim($(this).val()).length)
						{
							var $todo_entry = $('<li><div class="checkbox checkbox-replace color-white"><input type="checkbox" /><label>'+$(this).val()+'</label></div></li>');
							$(this).val('');
		
							$todo_entry.appendTo($todo_tasks.find('.todo-list'));
							$todo_entry.hide().slideDown('fast');
							replaceCheckboxes();
						}
					}
				});
			});
		</script>
		
		
	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/datatables/datatables.css">
	<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="assets/js/select2/select2.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/datatables/datatables.js"></script>
	<script src="assets/js/select2/select2.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>

		
		
		
		
	
		
		
		