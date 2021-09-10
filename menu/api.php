<?php

//Envoyer a un numero

//Envoyer a un groupe
 $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

$message=$_GET['message'];

//pour inserer dans la table
$messagetb=addslashes($message);
$id=$_GET['id'];

$sender=$_GET['expediteur'];
$categorie=$_GET['categorie'];
$message=urlencode($message);




//Recuperer solde
$requetesolde="SELECT *FROM solde WHERE solde_client=$id";
$resultatsolde=$connexion->query($requetesolde);
$solde=mysqli_fetch_array($resultatsolde);
$quantite_achetee=$solde['quantite_achetee'];
$quantite_consommee=$solde['quantite_consommee'];

$solde_restant=$quantite_achetee-$quantite_consommee;

    $dates=date("d-m-Y");
    $heure=date("H:i");

//Envoyer a un numero
if($categorie=='numero')
  {
    $telephone=$_GET['telephone'];

    if($solde_restant>0)
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

        
        $requet="INSERT INTO rapport(`iduser`,`sender`,`telephone`,`message`,`typesDenvoie`,`dates`,`heure`,`statut`, `messageid`)VALUES($id,'$sender','$telephone','$messagetb', '$categorie', '$dates','$heure','$description','$messageid')";
        $resultat=$connexion->query($requet);

        if($description=='Success')
          {
            $requete="UPDATE solde SET quantite_consommee=quantite_consommee+1 WHERE solde_client=$id";
            $resultats=$connexion->query($requete);

          }

        

        if($description=='Success')
            {
                echo "<div style='font-size:20pt; color:green; text-align:center; font-style:bold;'> Votre message est envoyé au numero $telephone avec succès.<br>Cliquez <a href='corp.php?menu=py'>ici</a> pour voir le rapport </div>";  
            }
        else{
                 echo "<div style='font-size:20pt; color:red; text-align:center; font-style:bold;'> Votre message n'a pas été envoyé au numero $telephone </div>"; 
            }
        
      }
      else
      {
        echo "Solde insuffisant $id";
      }
    

                                
   
  }
//Envoyer a un groupe Asynchrone pour eviter de bloquer l'application
else if($categorie=='groupe')
  {
      $codegroupe=$_POST['codegroupe'];

      $requete="SELECT * FROM `membre` WHERE 	codegroupe=$codegroupe";
      $resultat=$connexion->query($requete);
      $totmembre=mysqli_num_rows($resultat);

      //Verifier si le solde est superieur aux nombre des membres de groupe avant d'envoyer
      if($totmembre<$solde_restant)
        {

          $cmd="php -f /var/www/html/sendsms.php $codegroupe $id $message $sender &";
									
          exec($cmd ."> /dev/null &");

          if($totmembre>1000)
            {
              $dure=(int)($totmembre/1000);
              $duree=" $dure minutes";
            }
          else
            {
              $duree="moins d'une minute";
            }
         
          echo "<div style='font-size:20pt; color:green; text-align:center; font-style:bold;'> Vos messages sont en cours d'envois et pourraient prendre $duree.<br>Cliquez <a href='corp.php?menu=py'>ici</a> pour voir les mesages déjà envoyés</div>";  
           
       



              //  while($gro=mysqli_fetch_array($resultat))
              //   {
              //     $telephone=$gro['telephone'];
                  
              //     $url="http://smsuser.dream-digital.info:6005/api/v2/SendSMS?ApiKey=78HrvshCi+wm56S6XUe0FBeCZ23eC7ozxJuK+GZMsHc=&ClientId=62f65558-8a81-49ed-a0e3-ac322ddc9530&SenderId=$sender&Message=$message&MobileNumbers=$telephone";
                                                                                                                  
              //     // create curl resource 
              //     $ch = curl_init(); 

              //     // set url 
              //     curl_setopt($ch, CURLOPT_URL, $url); 

              //     //return the transfer as a string 
              //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

              //     // $output contains the output string 
              //     $output = curl_exec($ch); 

              //     // close curl resource to free up system resources 
              //     curl_close($ch);

              //     $retour= explode ( "," , $output); 

              //     // //$code=$retour[2];
                  
              //     $description=$retour[3];
              //     $description=explode(":",$description);
              //     $description=substr($description[1],1,-1);
          
          
                  
              //     $messageid=$retour[5];
              //     $messageid=explode(":",$messageid);
              //     $messageid=substr ($messageid[1],1,-1);

                  
              //     $requet="INSERT INTO rapport(`iduser`,`sender`,`telephone`,`message`,`typesDenvoie`,`dates`,`heure`,`statut`, `messageid`)VALUES($id,'$sender','$telephone','$messagetb', '$categorie', '$dates','$heure','$description','$messageid')";
              //     $resultatsss=$connexion->query($requet);
          
              //     if($description=='Success')
              //       {
              //         $requete="UPDATE solde SET quantite_consommee=quantite_consommee+1 WHERE solde_client=$id";
              //         $resultats=$connexion->query($requete);
          
              //       }

                  
                
              //  }

              //  if($description=='Success')
              //       {
              //           echo "<div style='font-size:20pt; color:green; text-align:center; font-style:bold;'> Votre message est envoyé à $totmembre numeros avec succès.<br>Cliquez <a href='corp.php?menu=py'>ici</a> pour voir le rapport</div>";  
              //       }
              //   else{
              //           echo "<div style='font-size:20pt; color:red; text-align:center; font-style:bold;'> Votre message n'a pas été envoyé</div>"; 
              //       }
        }

      else
        {
          echo"Solde Insuffisant"; 
        }


    
  }


?>


<?php
      
      
       echo"<h1>message est envoyer $message   $telephone $sende $id</h1>";
?>