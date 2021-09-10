<?php

    $quantite=$_GET['service'];
    $productid=$_GET['productid'];
    $id=$_SESSION['id'];
    $dates=date("d-m-Y");
    $heure=date("H:i");

     $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");
   
    // $requetex="SELECT *FROM `solde` WHERE solde_client='$id' ";
    // $resultatx=$connexion->query($requetex);
    // $nbre=mysqli_num_rows($resultatx);
            
    // if($nbre==0)
    //     {
    //         $requeteq="INSERT INTO `solde`(solde_client, quantite_achetee, quantite_consommee)VALUES('$id', $quantite,0) ";
    //         $resultatq=$connexion->query($requeteq); 
    //     }
    // else
    //     {
            $requeteq="UPDATE `solde` SET quantite_achetee=quantite_achetee+$quantite WHERE solde_client='$id' ";
            $resultatq=$connexion->query($requeteq);           
        //}



        

    

    $requete="INSERT INTO  `commande` (`com_client`,`com_produit`,`date`,`heure`,`etat_paie`)VALUES($id,$productid,'$dates','$heure','OUI')";
    $resultat=$connexion->query($requete);

    header("Location:corps.php");
							

?>

