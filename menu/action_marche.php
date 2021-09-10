 <?php
            
 $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

        
            $id=$_POST['id'];
            $nom=$_POST['nom'];
           
             
     
    

            $requet="DELETE FROM groupe WHERE id='$id' ";
    $resultat=$connexion->query($requet)
 
        ?>

        <?php
    echo"<div ><h3 style='color:red; text-align:center;'>Vous avez supprimes dans notre base de données</h3><hr><a href='corp.php?menu=mch' ><button  class='btn btn-success' style='text-align:center;'>OK</button><a></div";

    ?>