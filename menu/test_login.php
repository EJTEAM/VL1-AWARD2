<?php
    //Creation de la session
    session_start();
    require('fbini.php'); 
    
    
    //Fin Gestion Facebook
    
    //Si l'utilisateur se deconnecte
    if ((isset($_GET['action'])) && ($_GET['action'] == 'logout'))
        {
            //Reinitialisation de toutes les variables de sessiosn
            $_SESSION = array();

            //Destruction de la session
            session_destroy();
            session_start();

            header("Location:https://sms.eliajimmy.net");


        }
    
    if(isSet($_SESSION['email']))
        {
            header("Location:corp.php");
        }
   else if(!empty($_POST['email']) && !empty($_POST['motpasse'])) 
        {

            $motpasse=$_POST['motpasse'];
            
            $email=$_POST['email'];
          
             $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");
			//$connexion= mysqli_connect("localhost","eliajimm_ejhost","j'utiliseLGsmartTV","eliajimm_payement");

			
            $requet="SELECT* FROM user WHERE email='$email'  AND motpasse='$motpasse'";
                            
            $resultat=$connexion->query($requet);

            $existe=mysqli_num_rows($resultat);

            if($existe==0)
                {
                    $messages['email']="L'identifiant ou le mot de passe saisi est incorect";

                   // echo $message;

                   
                }
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

                    $urlphoto=$compte['urlphoto'];

                    session_start();
                    
                    $_SESSION['email'] = $email;
                    
                    $_SESSION['motpasse'] = $motpasse;

                    $_SESSION['telephone'] = $telephone;

                    $_SESSION['id'] = $id;
                    
                    $_SESSION['types'] = $types;
                    
                    $_SESSION['nom'] = $nom;
                    
                    $_SESSION['prenom'] = $prenom;

                    $_SESSION['urlphoto'] = $urlphoto;
                    
                    header("Location:corp.php");
        
                }
        }

      else
        {
             $message = 'Veuillez inscrire vos identifiants svp !';
        }
  
?>