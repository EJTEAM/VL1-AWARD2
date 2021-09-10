<?php

$output = file_get_contents("php://input");

$search='soapenv:Body';
$replace='Body';
$output=str_replace ($search, $replace, $output);

    $search='gen:getGenericResult';
    $replace='getGenericResult';
   $output=str_replace ($search, $replace, $output);


    $xml = new SimpleXMLElement($output);
    
    $ResultType=$xml->Body->getGenericResult->Request->dataItem[0]->value;

    $ResultCode=$xml->Body->getGenericResult->Request->dataItem[1]->value;

    $reponsempesa=$xml->Body->getGenericResult->Request->dataItem[2]->value;

    $OriginatorConversationID=$xml->Body->getGenericResult->Request->dataItem[3]->value;

    $ConversationID=$xml->Body->getGenericResult->Request->dataItem[4]->value;

    $idtransaction=$xml->Body->getGenericResult->Request->dataItem[5]->value;

    $Amount=$xml->Body->getGenericResult->Request->dataItem[6]->value;

    $TransactionTime=$xml->Body->getGenericResult->Request->dataItem[7]->value;

    $InsightReference=$xml->Body->getGenericResult->Request->dataItem[8]->value;

    $TransactionID=$xml->Body->getGenericResult->Request->dataItem[9]->value;

   
    //$ResultDesc=="Process service request successfully.", si le client a payé
    //$ThirdPartyReference est l'identifiant de la transaction

    //$connexion = mysqli_connect("localhost", "ejsarl_furaha",  "eliamaisongo@","ejsarl_kampuma");
    $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

    if($reponsempesa=="Process service request successfully.")
        {
            $etatpaie='OUI';
            //Recuperer l'id du client dans la table à partir de l'idtransaction
            $requetes="SELECT *FROM commande WHERE idtransaction='$idtransaction' ";
            $resultats=$connexion->query($requetes);
            $client=mysqli_fetch_array($resultats);
            $idclient=$client['com_client'];
            $com_produit=$client['com_produit'];

            $requetee="SELECT *FROM `produits` WHERE id='$com_produit' ";
            $resultate=$connexion->query($requetee);
            $client=mysqli_fetch_array($resultate);
            $quantite=$client['quantite'];

            

            $requetex="SELECT *FROM `solde` WHERE solde_client='$idclient' ";
            $resultatx=$connexion->query($requetex);
            $nbre=mysqli_num_rows($resultatx);
            if($nbre==0)
                {
                    $requeteq="INSERT INTO `solde`(solde_client, quantite_achetee, quantite_consommee)VALUES('$idclient', $quantite,0) ";
                    $resultatq=$connexion->query($requeteq); 
                }
            else
                {
                    $requeteq="UPDATE `solde` SET quantite_achetee=quantite_achetee+$quantite WHERE solde_client='$idclient' ";
                    $resultatq=$connexion->query($requeteq);           
                }

            //Recuperer les infos du client
             //Recuperer les infos du Clients et de la facture
             $requetefa="SELECT *FROM user WHERE id=$idclient";
             $resultatfa=$connexion->query($requetefa);
             $client=mysqli_fetch_array($resultatfa);
            
             $prenom=$client['prenom'];
             $nom=$client['nom'];
            
            //Envoyer SMS
            $message="Le client $prenom $nom vient de payer  $Amount USD  pour $quantite SMS";
            $sender=urlencode("EJ SMS");
            $message=urlencode($message);
            $telephone[1]=243823204840;
            $telephone[2]=243829037858;
            $telephone[3]=243817754016;

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



        }
    else
        {
            $etatpaie='NON';
        }

    

    $requete="UPDATE commande SET etat_paie='$etatpaie', reponsempesa='$reponsempesa' WHERE idtransaction='$idtransaction'";
    $resultat=$connexion->query($requete);

							

?>

