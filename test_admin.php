<?php
// On prolonge la session
session_start();
//require('fbini.php'); 

// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['email'])) 
    {
        // Si inexistante ou nulle, on redirige vers le formulaire de login
        header('Location:https://sms.eliajimmy.net');
        exit();
    }

        // // init configuration
        // $clientID = '784114177842-jgqpelf479fete0e9u1gss0umv84rqbc.apps.googleusercontent.com';
        // $clientSecret = 'oEN-2PcziR2LkBRMYmuKUlLo';
        // $redirectUri = 'https://sms.eliajimmy.net/corp.php';
                    
        // // create Client Request to access Google API
        // $client = new Google_Client();
        // $client->setClientId($clientID);
        // $client->setClientSecret($clientSecret);
        // $client->setRedirectUri($redirectUri);
        // $client->addScope("email");
        // $client->addScope("profile");
                    
        // // authenticate code from Google OAuth Flow
        // if (isset($_GET['code'])) 
        //     {
        //         $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        //         $client->setAccessToken($token['access_token']);
                
        //         // get profile info
        //         $google_oauth = new Google_Service_Oauth2($client);
        //         $google_account_info = $google_oauth->userinfo->get();
        //         $email =  $google_account_info->email;
        //         $noms =  $google_account_info->name;
        //         $prenom=  $google_account_info->given_name;
        //         $nom =  $google_account_info->family_name;
        //         $url =  $google_account_info->picture;
                
        //         $_SESSION['nom'] = $nom;

        //         $_SESSION['email'] = $email;
                
        //         $_SESSION['prenom'] = $prenom;

        //         $_SESSION['urlphoto'] = $url;

        //         $dates = date("d-m-Y");

        //         $heure = date("H:i");
                
        //         // now you can use this profile info to create account in your website and make user logged in.
        //         $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");
                            
        //         $requet="SELECT* FROM user WHERE `email`='$email' ";
                                        
        //         $resultat=$connexion->query($requet);

        //         $existe=mysqli_num_rows($resultat);

        //         //Si l'utilisateur n'existe on cree l'utilisateur
        //         if($existe==0)
        //             {
        //                 $requet="INSERT INTO user(nom, postnom, prenom, email,telephone,motpasse,types,date,heure,mode_souscription,urlphoto,fbid)VALUES('$nom','$noms', '$prenom','$email','','','Invite','$dates','$heure','Google','$url','')";
        //                 $resultat=$connexion->query($requet);
                                    
        //                 $idclient=mysqli_insert_id($connexion);

        //                 $types='Invite';

        //                 $_SESSION['id'] = $idclient;

        //                 $_SESSION['types'] = $types;
                                        
        //                 $requetee="INSERT INTO `solde` (`solde_client`,`quantite_achetee`,`quantite_consommee`)VALUES('$idclient',5,0)";
        //                 $resultatee=$connexion->query($requetee);

        //                 header("Location:corp.php") ; 

        //             } 
        //         //Si l'utilisateur existe, on cree ses infos et on place dans la session
        //         else
        //             {
        //                 $compte=mysqli_fetch_array($resultat);
                                
        //                 $id=$compte['id'];
                                                            
        //                 $email=$compte['email'];
                                                            
        //                 $motpasse=$compte['motpasse'];
                    
        //                 $nom=$compte['nom'];
                                                            
        //                 $prenom=$compte['prenom'];
                                                            
        //                 $telephone=$compte['telephone'];
                    
        //                 $types=$compte['types'];
                    
        //                 session_start();
                                        
        //                 $_SESSION['email'] = $email;
                                        
        //                 $_SESSION['motpasse'] = $motpasse;
                    
        //                 $_SESSION['telephone'] = $telephone;
                    
        //                 $_SESSION['id'] = $id;
                                        
        //                 $_SESSION['types'] = $types;
                                        
        //                 $_SESSION['nom'] = $nom;
                                        
        //                 $_SESSION['prenom'] = $prenom;
                                        
        //                 header("Location:corp.php");  
        //         }
        //     }
?>