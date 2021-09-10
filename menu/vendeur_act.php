<?php


   $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

     
     $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
     $telephone=$_POST['telephone'];
     $codegroupe=$_POST['codegroupe'];
     $dates=date("d-m-Y");
    $heure=date("H:i");
    $id=$_POST['id'];

           
  $requet="UPDATE membre SET nom='$nom',prenom='$prenom',telephone='$telephone',codegroupe='$codegroupe' WHERE id='$id'";
  $resultat=$connexion->query($requet)
    



  ?>



<?php
     
       echo " <h1> Le nom du membre a été modifié par $prenom $nom </h1>"; 

?>
		   

<?php
	require_once('menu/vendeur_m.php')
	
?>		
