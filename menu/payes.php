
					
		<h2>Rapport</h2>
		
		<br />
		
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
				    <TH></TH>
					
					<th>Sender</th>
					<th data-hide="phone">Telephone</th>
					<th>Envoie</th>
					<th>Reception</th>
					<th data-hide="phone,tablet">Message</th>
					<th>Types</th>
					<th>Date</th>
					
				</tr>
			</thead>
			<tbody>
				
				    
                    	      <?php
                    
                         $pass=$_POST['pass'];
                          $login=$_POST['login'];
                          $id=$_SESSION['id'];
                    
                     $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");
                    
                    
                        
						
							 $requet="SELECT * FROM `rapport` WHERE iduser=$id ORDER BY id DESC";
                                $resultat=$connexion->query($requet);
                                
                                
                                $totcom=mysqli_num_rows($resultat);
                        
                                $total=0;
                                $i=0;
                                while($mes=mysqli_fetch_array($resultat))
                            
                              {
                              ++$i;
                				$id=$mes['id'];
                				$iduser=$mes['iduser'];
                				$sender=$mes['sender'];
                				$telephone=$mes['telephone'];
                				$message=$mes['message'];
                				$typesDenvoie=$mes['typesDenvoie'];
								$statut=$mes['statut'];
								$dlr=$mes['status'];
                				$dates=$mes['dates'];
								$heure=$mes['heure'];
								if($statut=='')
									{
										$statut='Echec';
									}
                    		  
                    		    
                    echo"
                <tr class='odd gradeX'>
					<td>$i</td>
				
					<td>$sender/$iduser</td>
					<td class='center'>$telephone</td>
					<td class='center'>$statut</td>
					<td class='center'>$dlr</td>
					<td class='center'>$message</td>
					<td class='center'>$typesDenvoie</td>
					<td class='center'>$dates  $heure</td>
					
		
				</tr>
						   ";
            }

         ?> 
			<tfoot>
					<tr>
				    <TH></TH>
					<th data-hide="phone"></th>
					<th></th>
					<th data-hide="phone"></th>
					<th data-hide="phone,tablet"></th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</tfoot>
		</table>
		
		<br />
	<?php echo" <a href='corp.php?menu=undel&id=$iduser'>Voir les numeros non actifs </a>" ?>
		
	
			
		
	





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



