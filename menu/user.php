

	
	
	
			<h2>Listes des utilisateurs</h2>
		
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
		
		
		<table class='table table-bordered datatable' id='table-1'>
			<thead>

				<tr>
					<th data-hide='phone'>#</th>
					<th>Prenom</th>
					<th>Nom</th>
                     <th>Email</th>
					<th data-hide='phone'>Telephone</th>
					<th>Solde SMS</th>
					
					
				
				</tr>
			</thead>
			<tbody>

	<?php

     $pass=$_POST['pass'];
      $login=$_POST['login'];


       $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

         $requet="SELECT * FROM `user`";
        $resultat=$connexion->query($requet);
        
        
        $totcom=mysqli_num_rows($resultat);

        $total=0;
        $i=0;
        while($mes=mysqli_fetch_array($resultat))
          {
          	++$i;
          	$id=$mes['id'];
            $nom=$mes['nom'];
            $prenom=$mes['prenom'];
            $email=$mes['email'];
           $solde=$mes['solde'];   
           $telephone=$mes['telephone'];
		  
		    
echo"
				<tr class='odd gradeX'>
					<td>$i</td>
					<td>$prenom</td>
					<td>$nom</td>
					
					<td class='center'>$email</td>
					<td class='center'>$telephone</td>
					<td>$solde</td>
					
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



	