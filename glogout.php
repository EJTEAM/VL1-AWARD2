<?php
    session_start();

    $token=$_POST['idtoken'];

    $url="https://oauth2.googleapis.com/tokeninfo?id_token=$token";

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

        $obj = json_decode($output);
        $email=$obj->{'email'};
        $gid=$obj->{'sub'};
        $noms=$obj->{'name'};
        $prenom=$obj->{'given_name'};
        $nom=$obj->{'family_name'};
        $url=$obj->{'picture'};
        $dates = date("d-m-Y");
	
        $heure = date("H:i");
        
        $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

        $requet="SELECT* FROM user WHERE `fbid`='$gid' ";
                                    
        $resultat=$connexion->query($requet);

        $existe=mysqli_num_rows($resultat);

        //Si l'utilisateur n'existe on cree l'utilisateur
        if($existe==0)
            {
                
                $requet="INSERT INTO user(nom, postnom, prenom, email,telephone,motpasse,types,date,heure,mode_souscription,urlphoto,fbid)VALUES('$nom','$noms', '$prenom','$email','','$fbid','Invite','$dates','$heure','Gmail','$url','$gid')";
                $resultat=$connexion->query($requet);

                $idclient=mysqli_insert_id($connexion);

                $types='Invite';

                $_SESSION['id'] = $idclient;

                $_SESSION['types'] = $types;

                $_SESSION['email'] = $email;
                            
                $_SESSION['nom'] = $nom;
                            
                $_SESSION['prenom'] = $prenom;

                $_SESSION['urlphoto'] = $url;
                
                $requetee="INSERT INTO `solde` (`solde_client`,`quantite_achetee`,`quantite_consommee`)VALUES('$idclient',5,0)";
                $resultatee=$connexion->query($requetee);

                //header("Location:corp.php") ; 

            } 
        //Si l'utilisateur existe, on cree ses infos et on place dans la session
        else
            {
                $compte=mysqli_fetch_array($resultat);
        
                $id=$compte['id'];
                                    
                $email=$compte['email'];
                                    
                $motpasse=$compte['motpasse'];

                $nom=$compte['nom'];
                                    
                $prenom=$compte['prenom'];
                                    
                $telephone=$compte['telephone'];

                $types=$compte['types'];

                //session_start();
                
                $_SESSION['email'] = $email;
                
                $_SESSION['motpasse'] = $motpasse;

                $_SESSION['telephone'] = $telephone;

                $_SESSION['id'] = $id;
                
                $_SESSION['types'] = $types;
                
                $_SESSION['nom'] = $nom;
                
                $_SESSION['prenom'] = $prenom;
                
                //header("Location:corp.php");  
            }



    

    echo"$gid";


       
?>