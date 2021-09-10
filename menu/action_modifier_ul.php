 <?php

    $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");;

            $id=$_POST['id'];
            $nom=$_POST['nom'];
            $postnom=$_POST['postnom'];
            $prenom=$_POST['prenom'];
    		    $email=$_POST['email'];
    		    $telephone=$_POST['telephone'];
    		    $motpasse=$_POST['motpasse'];
    		    $types=$_POST['types'];
    		   
            $requet="UPDATE user SET nom='$nom',postnom='$postnom',prenom='$prenom',email='$email',telephone='$telephone', motpasse='$motpasse', types='$types' WHERE id='$id'";
    $resultat=$connexion->query($requet)
 

  ?> 

   <?php
        echo "<div ><h1 style='color:green, text-align:center,'>La modification de  $prenom $nom est bien faite </h1></div>";

		  //require_once('menu/modifier_utilis.php'); 
   ?> 