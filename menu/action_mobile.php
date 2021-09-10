 <?php

$connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

            $diss=$_POST['id'];
            $telephone=$_POST['telephone'];
            // $TelAirtel=$_POST['TelAirtel'];
            // $TelOrange=$_POST['TelOrange'];

            $_SESSION['telephone']=$telephone;
    		
    		    
    		   
    		   
            $requet="UPDATE user SET telephone='$telephone' WHERE id='$diss'";
          $resultat=$connexion->query($requet);
 
echo "<h3 style='color:green; text-align:center;'>Votre Telephone Vodacom MPesa est modifié avec succès</h3>";

require_once('menu/form_mobile.php'); 

  ?> 