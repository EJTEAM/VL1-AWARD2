<?php


  $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

            $id=$_POST['id'];
            $groupe=$_POST['groupe'];
           
    		   
            $requet="UPDATE groupe SET nom='$groupe' WHERE id='$id'";
    $resultat=$connexion->query($requet)


  ?>



<?php
     
      echo "<div style='font-size:20pt; color:green; text-align:center; font-style:bold;'> Votre groupe a été modifié au nom de $groupe avec succès </div>";

?>


<?php
	require_once('menu/groupeafc.php')
	
?>