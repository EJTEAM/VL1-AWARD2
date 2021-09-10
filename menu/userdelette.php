 <?php
            
   $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

        
          $id=$_POST['id'];
           $nom=$_POST['nom'];
          $prenom=$_POST['prenom'];
          $email=$_POST['email'];
          $telephone=$_POST['telephone'];
             
     
    

    $requet="DELETE FROM user WHERE id='$id' ";
    $resultat=$connexion->query($requet)
 ?>

<?php
    echo"<h3 style='color:green; text-align:center;'>Vous venez de supprimer l’utilisateur $prenom $nom</h3><hr>
  
    ";
    require_once('menu/userdel.php');
?> 