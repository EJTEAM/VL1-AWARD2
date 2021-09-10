<?php

    $productid=$_GET['productid'];
    $prenompay=$_GET['prenom'];
    $nompay=$_GET['nom'];
    $id=$_SESSION['id'];
    $dates=date("d-m-Y");
    $heure=date("H:i");

    $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");



    //Recuperer les infos du Clients et de la facture
    $requetefa="SELECT * FROM `produits` WHERE id=$productid";
    $resultatfa=$connexion->query($requetefa);
    $client=mysqli_fetch_array($resultatfa);
    $quantite=$client['quantite'];
    $montant=$client['total'];
   

    //Recuper les details de la commande
    $reqcom="SELECT * FROM `user` WHERE id=$id";
    $resultatcom=$connexion->query($reqcom);
    $description=" ";
    $totre=mysqli_num_rows($resultatcom);
    while($comm=mysqli_fetch_array($resultatcom))
        {
            $prenom=$comm['prenom'];
            $nom=$comm['nom'];
        
        }
    
    $requeteq="UPDATE `solde` SET quantite_achetee=quantite_achetee+$quantite WHERE solde_client='$id' ";
    $resultatq=$connexion->query($requeteq);           

    $requete="INSERT INTO  `commande` (`com_client`,`com_produit`,`date`,`heure`,`etat_paie`,reponsempesa, montant)VALUES($id,$productid,'$dates','$heure','OUI','PAYPAL:$prenompay $nompay','$montant')";
    $resultat=$connexion->query($requete);

    //Envoyer SMS
    $message="Le client $prenom $nom vient de payer $montant USD pour $quantite SMS avec son compte PAYPAL $prenompay $nompay";
    $sender=urlencode("EJ SMS");
    $message=urlencode($message);
    $telephone[1]=243823204840;
    $telephone[2]=243829037858;
    $telephone[3]=243897499138;
    for($i=1;$i<4;++$i)
        {
            $url="http://smsuser.dream-digital.info:6005/api/v2/SendSMS?ApiKey=78HrvshCi+wm56S6XUe0FBeCZ23eC7ozxJuK+GZMsHc=&ClientId=62f65558-8a81-49ed-a0e3-ac322ddc9530&SenderId=$sender&Message=$message&MobileNumbers=$telephone[$i]";
                                                                                                            
            // create curl resource 
            $ch = curl_init(); 

            // set url 
            curl_setopt($ch, CURLOPT_URL, $url); 

            //return the transfer as a string 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

            // $output contains the output string 
            $output = curl_exec($ch); 

            // close curl resource to free up system resources 
            curl_close($ch);
        }
       
    header("Location:https://sms.eliajimmy.net/corp.php");
							

?>

