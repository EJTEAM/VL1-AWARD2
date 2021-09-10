 <?php
            
$connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

        
            $id=$_POST['id'];
            $groupe=$_POST['groupe'];
          $postnom=$_POST['postnom'];
            $prenom=$_POST['prenom'];
             $sexe=$_POST['sexe'];
             $numeroTable=$_POST['numeroTable'];
             $telephone=$_POST['telephone'];
     
    
            //Supprimer le groupe
            $requet="DELETE FROM groupe WHERE id='$id' ";
            $resultat=$connexion->query($requet);

            //Supprimer les membres
            $requets="DELETE FROM membre WHERE `codegroupe`='$id' ";
            $resultats=$connexion->query($requets);
 
        ?>

        <?php
    echo"<div ><h3 style='color:red; text-align:center;'>Vous avez supprimé $groupe dans la liste de groupe</h3></div";

    ?>
    
<?php
	require_once('menu/groupe_s.php')
	
?>