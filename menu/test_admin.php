<?php
// On prolonge la session
session_start();
//require('fbini.php'); 

//Gestion creation email et number via Facebook
if(isSet($_POST['newuserfb'])) 
    {
       //recuperer les infos
       $fbemail=$_SESSION['fbemail'];
       $telephone=$_POST['telephone'];
       $fbid=$_SESSION['fbid'];
       $urlphoto= $_SESSION['urlphoto'];
    
       //Verifier si l'email existe, 
       $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");
                        
        
                $request1="UPDATE user SET telephone='$telephone' WHERE `fbid`='$fbid' ";
                $result1=$connexion->query($request1);

           

       $_SESSION['email']=$fbemail;
       
    }

//Gestion creation email et number via Facebook
else if(isSet($_POST['newusergoogle'])) 
    {
       //recuperer les infos
        //$email=$_POST['email'];
       $telephone=$_POST['telephone'];
       $_SESSION['telephone']= $telephone;
       $gid=$_SESSION['id'];
       $urlphoto= $_SESSION['urlphoto'];
        //Verifier si l'email existe, 
        $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");
                            
        $requet="SELECT* FROM user WHERE `telephone`='NONE' AND id=$gid ";
                                    
        $resultat=$connexion->query($requet);

        $existe=mysqli_num_rows($resultat);

        // //Si le numero de client existe, on met à jour sa photo de profile lorsque l'idendifiant Faceboo id=$gid
        if($existe==0)
            {
                $request1="UPDATE user SET urlphoto='$urlphoto' WHERE id=$gid ";
                $result1=$connexion->query($request1);


            }
        //Si il numero n'existe pas, on fait une mise a jour de son numero lorsque id = $gid
        else
            {
                $request1="UPDATE user SET `telephone`='$telephone'  WHERE `id`='$gid' ";
                $result1=$connexion->query($request1);

            }
    

    $_SESSION['email']=$email;
    
    }

//Gestion presenter formulaire pour ajouter numero donnees via google
else if(isSet($_SESSION['google'])) 
    {
        //Verifions si le numero est enregistre
        $telephone=$_SESSION['telephone'];
        
        if($telephone=='NONE')
            {
                //On ouvre l'application en creation la session
                header("Location:association.php") ; 
                 
            }
         
        else
            {
                $_SESSION['email']=$email;
                   
            }
    }


     

// On teste si la variable de session existe et contient une valeur
else if(empty($_SESSION['email'])) 
    {
        // Si inexistante ou nulle, on redirige vers le formulaire de login
        header('Location:https://sms.eliajimmy.net');
        exit();
    }
?>