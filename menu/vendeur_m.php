	<h2>Liste de membres</h2>
		
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
					<th data-hide="phone"></th>
					<th>Nom</th>
					
					<th data-hide="phone,tablet">Prenom</th>
				
					<th>Telephone</th>
					
					<th>Groupe</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				  <?php

     $pass=$_POST['pass'];
      $login=$_POST['login'];
      $id=$_SESSION['id'];

 $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");


  



     $requet="SELECT * FROM `membre`  WHERE iduser=$id";
    $resultat=$connexion->query($requet);
        
        
        $totcom=mysqli_num_rows($resultat);

        $total=0;
        $i=0;
        while($mes=mysqli_fetch_array($resultat))
          {
          	++$i;
          	$id=$mes['id'];
           	$nom=$mes['nom'];
		    $dates=$mes['dates'];
		    $heure=$mes['heure'];
		    $prenom=$mes['prenom'];
		    $telephone=$mes['telephone'];
		    $codegroupe=$mes['codegroupe'];
		    
		  
		    
           echo"
				<tr class='odd gradeX'>
					<td>$i</td>
					<td>$nom</td>
					<td>$prenom</td>
					<td>$telephone</td>
					<td>$codegroupe</td>
					<td>
                     <a href='corp.php?menu=vma&id=$id' class='btn btn-info btn-sm btn-icon icon-left'> <i class='entypo-pencil'></i>
						Modifier
						</a>

					
					</td>
				</tr>
				   ";
            }

         ?> 

			</tfoot>
		</table>
		
		
		
		
		
		
	
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


