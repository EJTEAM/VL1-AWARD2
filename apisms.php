<?php

//Envoyer a un groupe
 $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

 //Les donnees viennent de l'API
$user=$_GET['user'];
    
$password=$_GET['password'];



$requet="SELECT* FROM user WHERE email='$user'  AND motpasse='$password'";
                            
$resultat=$connexion->query($requet);

$existe=mysqli_num_rows($resultat);

    if($existe==0)
        {
                    echo "L'identifiant ou le mot de passe saisi est incorect";
        
        }
    else    
        {
            $compte=mysqli_fetch_array($resultat);
                    
            $id=$compte['id'];
                                        
            $email=$compte['email'];
        
            $message=$_GET['message'];

            $sender=$_GET['expediteur'];

            $accentue= array("é", "è", "ê", "ë", "ė","ę","à", "á", "â", "ä","ô", "ö","û", "ü", "ù", "ú");

            $normal  = array("e", "e", "e", "e", "e"."e","é", "a", "a", "a","o", "o","u", "u", "u", "u");

            $message = str_replace($accentue, $normal, $message);

            //pour inserer dans la table
            $messagetb=addslashes($message);

            $sender=str_replace($accentue, $normal, $sender);

            $sender=urlencode($sender);

            $message=urlencode($message);

            //Recuperer solde
            $requetesolde="SELECT *FROM solde WHERE solde_client=$id";
            $resultatsolde=$connexion->query($requetesolde);
            $solde=mysqli_fetch_array($resultatsolde);
            $quantite_achetee=$solde['quantite_achetee'];
            $quantite_consommee=$solde['quantite_consommee'];

            $taille=strlen($message);

            if($taille <= 160)
                {
                    $x=1;
                }
            else if(($taille > 153) && ($taille<= 306))
                {
                    $x=2;
                }
            else if(($taille > 306) && ($taille <= 459))
                {
                    $x=3;
                }
            else if(($taille > 459) && ($taille <= 612))
                {
                    $x=4;
                }

            else if(($taille > 612) && ($taille <= 765))
                {
                    $x=5;
                }

            else if(($taille > 765) && ($taille <= 918))
                {
                    $x=6;
                }

            else if(($taille > 918) && ($taille <= 1071))
                {
                    $x=7;
                }

            else if(($taille > 1071) && ($taille <= 1224))
                {
                    $x=8;
                }

            else if(($taille > 1224) && ($taille <= 1377))
                {
                    $x=9;
                }

            else if(($taille > 1377) && ($taille <= 1530))
                {
                    $x=10;
                }


            $solde_restant=$quantite_achetee-$quantite_consommee;

            //$solde_restant=$solde_restant*$x;

                $dates=date("d-m-Y");
                $heure=date("H:i");

                $telephone=trim($_GET['telephone']);
                $messageerreur="Car, votre message contient $x SMS";

                if(($solde_restant+1)>$x)
                    {
                        $url="http://smsuser.dream-digital.info:6005/api/v2/SendSMS?ApiKey=78HrvshCi+wm56S6XUe0FBeCZ23eC7ozxJuK+GZMsHc=&ClientId=62f65558-8a81-49ed-a0e3-ac322ddc9530&SenderId=$sender&Message=$message&MobileNumbers=$telephone";
                                                                                                                            
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

                        $retour= explode ( "," , $output); 

                        //$code=$retour[2];
                        
                        $description=$retour[3];
                        $description=explode(":",$description);
                        $description=substr($description[1],1,-1);


                        
                        $messageid=$retour[5];
                        $messageid=explode(":",$messageid);
                        $messageid=substr ($messageid[1],1,-1);

                    
                        
                        $requet="INSERT INTO rapport(`iduser`,`sender`,`telephone`,`message`,`typesDenvoie`,`dates`,`heure`,`statut`, `messageid`,`nombreSMS`)VALUES($id,'$sender','$telephone','$messagetb', '$categorie', '$dates','$heure','$description','$messageid',$x)";
                        $resultat=$connexion->query($requet);

                        if($description=='Success')
                        {
                                
                            $requete="UPDATE solde SET quantite_consommee=quantite_consommee+$x WHERE solde_client=$id";
                            $resultats=$connexion->query($requete);

                        }

                        

                        if($description=='Success')
                            {
                                echo $output;  
                            }
                        
                    }
                    else
                    {
                        echo "Solde insuffisant, $messageerreur";
                    }
                    

                                                
                


}

?>