<?php
    
    session_start();

    require('vendor/autoload.php');
    //Google
    
//Si les donnees viennent de google et non Facebook

    $fb = new Facebook\Facebook([

    'app_id' => '274699830996911',
   
    'app_secret' => '4408e70021ca43954b3f8e0ff9e0363c',
   
    'default_graph_version' => 'v10.0',
   
   ]);

   $helper = $fb->getRedirectLoginHelper();

   $permissions = ['email']; 

   $callbackUrl = htmlspecialchars('https://sms.eliajimmy.net');

   $login_url = $helper->getLoginUrl($callbackUrl, $permissions);

    try {
            $accessToken = $helper->getAccessToken();
        
            if(isset($accessToken))
                {
                    $_SESSION['emails']= (string) $accessToken; //Convert token to string

                    $_SESSION['facebook']='Facebook'; //Help to manage authentification from Facebook or Not Facebook
                    
                }
        } 
    catch (Exception $exc) 
        {
            echo $exc->getTraceAsString();
        }


    if(isSet($_SESSION['emails']))
        {
            if(isSet($_SESSION['facebook']))
                {

                    try {
                            $fb->setDefaultAccessToken($_SESSION['emails']);

                            $res = $fb->get('/me?fields=email,first_name,last_name, name');

                            $requestPicture = $fb->get('/me/picture?redirect=false&height=200'); //getting user picture

                            $picture = $requestPicture->getGraphUser();

                            $profile = $res->getGraphUser();

                            $fbid = $profile->getProperty('id'); // To Get Facebook ID

                            $noms = $profile->getProperty('name');
                            
                            $prenom = $profile->getProperty('first_name');

                            $prenom = $profile->getProperty('first_name');

                            $nom = $profile->getProperty('last_name');

                            $fbemail = $profile->getProperty('email');  // To Get Facebook email

                            // if(isset($fbemail))
                            //     {
                            //         $fbemail='exite';
                            //     }
                            // else
                            //     {
                            //         $fbemail='pasexite';
                            //     }

                            $url=$picture['url'];
                            
                            $_SESSION['nom'] = $nom;
                            
                            $_SESSION['prenom'] = $prenom;

                            $_SESSION['urlphoto'] = $url;

                            $dates = date("d-m-Y");
            
                            $heure = date("H:i");

                            //Verifier si l'utilisateur Existe
                            $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");
                        
                            //$requet="SELECT* FROM user WHERE `fbid`='$fbid' ";

                            $requet="SELECT* FROM user WHERE `email`='$fbemail' ";
                                    
                            $resultat=$connexion->query($requet);

                            $existe=mysqli_num_rows($resultat);

                            //Si l'utilisateur n'existe on cree l'utilisateur
                            if($existe==0)
                                {
                                    $nom=addslashes($nom);
                                    $prenom=addslashes($prenom);
                                    $noms=addslashes($noms);
                                    $requet="INSERT INTO user(nom, postnom, prenom, email,telephone,motpasse,types,date,heure,mode_souscription,urlphoto,fbid)VALUES('$nom','$noms', '$prenom','$fbemail','','$fbid','Invite','$dates','$heure','Facebook','$url','$fbid')";
                                    $resultat=$connexion->query($requet);
                                
                                    $idclient=mysqli_insert_id($connexion);

                                    $types='Invite';

                                    session_start();
                                    
                                    $_SESSION['id'] = $idclient;

                                    $_SESSION['types'] = $types;

                                    $_SESSION['fbid'] = $fbid;

                                    $_SESSION['urlphoto'] = $url;

                                    $_SESSION['fbemail'] = $fbemail;

                                    //$_SESSION['email']=(string) $accessToken;
                                    
                                    $requetee="INSERT INTO `solde` (`solde_client`,`quantite_achetee`,`quantite_consommee`)VALUES('$idclient',5,0)";
                                    $resultatee=$connexion->query($requetee);

                                    header("Location:association.php") ; 

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

                                    $fbid=$compte['fbid'];
                
                                    session_start();

                                    // if($email==$fbid)
                                    //     {
                                    //         $_SESSION['fbid'] = $fbid;

                                    //         header("Location:association.php") ;  
                                    //     }
                                    // else
                                    //     {
                                            $_SESSION['email'] = $email;
                                            
                                            $_SESSION['motpasse'] = $motpasse;
                        
                                            $_SESSION['telephone'] = $telephone;
                        
                                            $_SESSION['id'] = $id;
                                            
                                            $_SESSION['types'] = $types;
                                            
                                            $_SESSION['nom'] = $nom;
                                            
                                            $_SESSION['prenom'] = $prenom;
                                            
                                            header("Location:corp.php"); 
                                        //} 
                                }
                    
                    } catch (Exception $exc) {
                       echo $exc->getTraceAsString();
                    }
                }
        }

?>