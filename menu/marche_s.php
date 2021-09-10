<table class="table table-bordered datatable" id="table-1">
			<thead>

				<tr>
					<th data-hide="phone">#</th>
					<th>Nom</th>
					<th data-hide="phone">Dates</th>
					<th data-hide="phone,tablet">Heure</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				 <?php

     $pass=$_POST['pass'];
      $login=$_POST['login'];

 $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");


  



     $requet="SELECT * FROM `groupe`";
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
		    
echo"
				<tr class='odd gradeX'>
					<td>$i</td>
					<td>$nom</td>
					<td class='center'>$dates</td>
					<td class='center'>$heure</td>
					<td>
					<a href='corp.php?menu=mas&id=$id&nom=$nom'' class='btn btn-danger btn-sm btn-icon icon-left'> <i class='entypo-cancel'></i>
					Suprimer
					</a></td>
				</tr>
				   ";
            }

         ?> 

			</tfoot>
		</table>