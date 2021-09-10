

	
	
	
			<h2>Liste de vendeurs payés </h2>
		
		<br />
		
		
		
		<table class='table table-bordered datatable' id='table-1'>
			<thead>

				<tr>
					<th data-hide='phone'>#</th>
					<th>Numero table</th>
					<th data-hide='phone'>Dates</th>
					
					<th>heure</th>
					
				
				</tr>
			</thead>
			<tbody>

				 <?php

     $pass=$_POST['pass'];
      $login=$_POST['login'];

$connexion= mysqli_connect("localhost","marcherd_ejsarl","eliamaisongo@","marcherd_recoltes");


  



     $requet="SELECT * FROM `payement`";
        $resultat=$connexion->query($requet);
        
        
        $totcom=mysqli_num_rows($resultat);

        $total=0;
        $i=0;
        while($mes=mysqli_fetch_array($resultat))
          {
          	++$i;
          	$id=$mes['id'];
           	$numero_table=$mes['numero_table'];
		    $dates=$mes['dates'];
		    $heure=$mes['heure'];
		    
		  
		    
echo"
				<tr class='odd gradeX'>
					<td>$id</td>
					<td>$numero_table</td>
					
					<td class='center'>$dates</td>
					<td class='center'>$heure</td>
					
					
				</tr>
				   ";
            }

         ?> 

		
			</tfoot>
		</table>
			
	



	