<?php


  $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
     $telephone=$_POST['telephone'];
     $codegroupe=$_POST['codegroupe'];
     $dates=date("d-m-Y");
    $heure=date("H:i");
    $id=$_SESSION['id'];

    if(is_uploaded_file($_FILES['excel']['tmp_name']))
		  {
			    $filename=$_FILES["excel"]["tmp_name"];

        	$file = fopen($filename, "r");

       		$count = 0;  

       		while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
				    {

              $count++; 

              if($count>1)
                {   

                  if($emapData[0]!='')
                    {
                      $telephone=$emapData[0];
                      $telephone=trim($telephone);
                      $telephone=str_replace(' ', '', $telephone);
                      $requet="INSERT INTO membre(nom,prenom,telephone,dates,heure,codegroupe, iduser)VALUES('$nom','$prenom','$telephone','$dates','$heure','$codegroupe',$id)";
                      $resultat=$connexion->query($requet);
                    }
         
					     }                                             
            } 
        }
      else
        {
              $requet="INSERT INTO membre(nom,prenom,telephone,dates,heure,codegroupe, iduser)VALUES('$nom','$prenom','$telephone','$dates','$heure','$codegroupe',$id)";
              $resultat=$connexion->query($requet);
        }

     
    


    
    



  ?>



<?php
     

   echo "<div style='font-size:20pt; color:green; text-align:center; font-style:bold;'>Vous venez d'ajouter le membre $prenom $nom dans le groupe avec succès.<br>Cliquez <a href='corp.php?menu=aj'>ici</a> pour ajouter un autre membre</div>";
?>

	
	
	
<?php
	require_once('menu/vendeur.php')
	
?>