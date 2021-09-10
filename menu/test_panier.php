<?php


    //Creation de la session
    session_start();
    
    $connexion= mysqli_connect("localhost","eliajimm_ejhost","j'utiliseLGsmartTV","eliajimm_payement");

    $date=date('Y-m-d');

    $heure=date('H:i:s');

    $reqcom="SELECT *FROM produits WHERE id=$codeproduit";

    $rescom=$connexion->query($reqcom);

    $detcom=mysqli_fetch_array($rescom);

    $plan=$detcom['plan'];

    $prix=$detcom['prix'];

    $disque=$detcom['disque'];

    $bande=$detcom['bande_passante'];

    $messagerie=$detcom['messagerie'];

    if(($codeproduit==5) || ($codeproduit==6))

        {

            $service=$_GET['query'];

            $service='Enregistrement nom de domaine : '.$service;

        }

    else

        {

            $service='Hebergement  : '.$plan.' (Disque dure :'.$disque.')';

        }

    

    
    if(isSet($_SESSION['moiidssss']))
        {
            //header("Location:http://sms.ejsarl.com");
            $id_session = $_SESSION['moiidssss'];
            
            echo "session ok $id_session";
        }
   else 
        {

                   

                    //$unique=uniqid();
                    $id_session = session_id();
                    
                    $_SESSION['moiidssss'] = $id_session;
                    

                    $requet="INSERT INTO clienttemporaire(dates,heure,uniques)VALUES('$date','$heure','$id_session')";

                    $resultat=$connexion->query($requet);
                    
                    echo "session non ok $id_session";
                   // header("Location:http://sms.eliajimmy.com");
        
                
        }

      
?>