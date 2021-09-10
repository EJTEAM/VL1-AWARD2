<?php


   $connexion = mysqli_connect("localhost", "ejsarl_furaha",  "eliamaisongo@","ejsarl_kampuma");
    //$connexion= mysqli_connect("localhost","eliajimm_ejhost","j'utiliseLGsmartTV","eliajimm_payement");
    $nom=$_POST['nom'];

   $dates = date("d-m-Y");
	
   $heure = date("H:i");


    $requet="INSERT INTO groupe(nom,heure,dates)VALUES('$nom','$dates','$heure')";
    $resultat=$connexion->query($requet)
    



  ?>



<?php
     
       echo " <div style='font-size:20pt; color:green; text-align:center; font-style:bold;'>votre enregistrement est faite</div>";  
       
        

?>