<?php


   

            $active=$_GET['hash'];
           $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

            $sep=explode(".", $active);
             $codemail=$sep[1];
            
            $requett="UPDATE `user` SET `activation`='Oui' WHERE cleactivation='$codemail'";
             $resultats=$connexion->query($requett);
            
            $requet="SELECT* FROM user WHERE cleactivation='$codemail'";
             
            $resultat=$connexion->query($requet);
            
                   $compte=mysqli_fetch_array($resultat);
                    
                    $id=$compte['id'];
                                        
                    $email=$compte['email'];
                                        
                    $motpasse=$compte['motpasse'];

                    $nom=$compte['nom'];
                                        
                    $prenom=$compte['prenom'];
                                        
                    $telephone=$compte['telephone'];

                    $types=$compte['types'];

                    session_start();
                    
                    $_SESSION['email'] = $email;
                    
                    $_SESSION['motpasse'] = $motpasse;

                    $_SESSION['telephone'] = $telephone;

                    $_SESSION['id'] = $id;
                    
                    $_SESSION['types'] = $types;
                    
                    $_SESSION['nom'] = $nom;
                    
                    $_SESSION['prenom'] = $prenom;
                    
                    header("Location:index.php");
        
            
        
        
//echo"$codegmail";
    
?>