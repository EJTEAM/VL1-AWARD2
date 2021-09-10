
			<h2>Mes clients</h2>
		
		<br />
		
		
		
		<table class='table table-bordered datatable' id='table-1'>
			<thead>

				<tr>
					<th data-hide='phone'>#</th>
					<th>Nom</th>
					<th data-hide='phone'>Prenom(s)</th>
					<th data-hide='phone,tablet'>Postenom</th>
					<th>Sexe</th>
					<th>Telephone</th>
					<th>Date de naissance</th>
					<th>Province</th>
					<th>Ville</th>
					<th>Marche</th>
					<th>N° table</th>
					<th> <a href='corp.php?menu=aj><button class='btn btn-info'>Ajouter nouveaux clients</button></th></a>
				</tr>
			</thead>
			<tbody>

				 <?php

     $pass=$_POST['pass'];
      $login=$_POST['login'];
      $id=$_SESSION['id'];

$connexion= mysqli_connect("localhost","marcherd_ejsarl","eliamaisongo@","marcherd_recoltes");


  



     $requet="SELECT * FROM `client`  WHERE codegroupe=$id";
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
		    $postnom=$mes['postnom'];
		    $sexe=$mes['sexe'];
		    $dat=$mes['dat'];
		    $province=$mes['province'];
		    $ville=$mes['ville'];
		    $marche=$mes['marche'];
		    $telephone=$mes['telephone'];
		    $tble=$mes['tble'];
echo"
				<tr class='odd gradeX'>
					<td>$i</td>
					<td>$nom</td>
					<td>$postnom</td>
					<td class='center'>$prenom</td>
					<td class='center'>$sexe</td>
					<td>$telephone</td>
					<td>$dat</td>
					<td>$province</td>
					<td>$ville</td>
					<td>$marche</td>
					<td>$tblee</td>
					<td><a href='formulair_modifier.php?id=$id&nom=$nom&prenom=$prenom&fonction=$fonction&juridique=$juridique&entite=$entite&adresse=$adresse&ville=$ville&pays=$pays&telephone=$telephone' class='btn btn-default btn-sm btn-icon icon-left'> <i class='entypo-pencil'></i>
						Modifier
						</a>
					<a href='delette.php?id=$id&nom=$nom&prenom=$prenom&fonction=$fonction&juridique=$juridique&entite=$entite&adresse=$adresse&ville=$ville&pays=$pays&telephone=$telephone'' class='btn btn-danger btn-sm btn-icon icon-left'> <i class='entypo-cancel'></i>
					Suprimer
					</a></td>
				</tr>
				   ";
            }

         ?> 

			</tfoot>
		</table>