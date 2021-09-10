<?php
	   $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");
    //$connexion= mysqli_connect("localhost","eliajimm_ejhost","j'utiliseLGsmartTV","eliajimm_payement");
    $email=$_POST['email'];
    $motpasse=$_POST['motpasse'];
    $telephone=$_POST['telephone'];
     $nom=$_POST['nom'];
     $postnom=$_POST['postnom'];
     $prenom=$_POST['prenom'];
     $types=$_POST['types'];

    


    $requet="INSERT INTO user(nom, postnom, prenom, email,telephone,motpasse,types)VALUES('$nom','$postnom', '$prenom','$email','$telephone','$motpasse','Invite')";
    $resultat=$connexion->query($requet)
    
?>
<?php 

echo "bonjour";
require_once('../menu/corp.php')

 ?>