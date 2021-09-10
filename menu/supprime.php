 <?php
            
 $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

        
            $id=$_POST['id'];
            $nom=$_POST['nom'];
          $postnom=$_POST['postnom'];
            $prenom=$_POST['prenom'];
             $sexe=$_POST['sexe'];
             $numeroTable=$_POST['numeroTable'];
             $telephone=$_POST['telephone'];
     
    

            $requet="DELETE FROM membre WHERE id='$id' ";
    $resultat=$connexion->query($requet)
 
        ?>

   
    
         <?php
    echo"<div ><h3 style='color:red; text-align:center;'>Vous avez supprimé $prenom $nom $telephone dans la liste de groupe</h3></div";

    ?>
    
<?php
	require_once('menu/vendeur_s.php')
	
?>