<?php
      

	
	$connexion = mysqli_connect("localhost","eliajimm_sms","j'utiliseSMS243","eliajimm_sms");
                                   
        
    $iduser=$_GET['iduser'];
			
	$telephone=$_GET['telephone'];
	      
            
           

    $requet="DELETE FROM membre WHERE iduser='$iduser' AND telephone='$telephone' ";
    $resultat=$connexion->query($requet);
 
	echo"vous venez de supprimer le numero $telephone dans ton groupe !";
	
	require('menu/undeliv.php');
	
 
?>
