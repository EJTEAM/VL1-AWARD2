 <?php

    $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

            $id=$_POST['id'];
            $nom=$_POST['nom'];
            $postnom=$_POST['postnom'];
            $prenom=$_POST['prenom'];
    		    $email=$_POST['email'];
    		    $telephone=$_POST['telephone'];
    		    $motpasse=$_POST['motpasse'];
    		    $types=$_POST['types'];
    		   
            $requet="UPDATE user SET nom='$nom',postnom='$postnom',prenom='$prenom',email='$email',telephone='$telephone', motpasse='$motpasse', types='Invite' WHERE id='$id'";
    $resultat=$connexion->query($requet);
    echo "<h3 style='color:green; text-align:center;'>Votre compte est modifié avec succès </h3>";

    require_once('menu/profil.php'); 
 

  ?> 

  