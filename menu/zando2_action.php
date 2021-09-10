<?php


   $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");
  $groupe=$_POST['groupe'];

   $heure = date("H:i");
   $dates = date("d-m-Y");
   $id=$_SESSION['id'];
  


    $requet="INSERT INTO groupe(nom, et_users, dates,heure)VALUES('$groupe', $id, '$dates','$heure')";
    $resultat=$connexion->query($requet)
    



  ?>



<?php
     
       echo "<div style='font-size:20pt; color:green; text-align:center; font-style:bold;'> Votre groupe $groupe est crée avec succès.<br>Cliquez <a href='corp.php?menu=aj'>ici</a> pour ajouter les membres</div>";  
                    
       

?>