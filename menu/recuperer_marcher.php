<?php
header('Content-Type: text/xml'); 

echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>\n";

	echo "<exemple>\n";

    $groupecode=$_GET['groupecode'];
    
     $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");

    $requete="SELECT *FROM groupe WHERE groupecode=$groupecode";
    $resultat=$connexion->query($requete);
    
    while($groupe=mysqli_fetch_array($resultat))
        {
            $groupe=$groupe['nom'];
            

            echo "<groupecode><![CDATA[" . $code. "]]></groupecode>\n";
            


        }

	echo "</exemple>\n";










    // $requet="INSERT INTO marche(nom, code, communecode)VALUES('nom',5,$codecommune)";
    // $resultat=$connexion->query($requet);

    $requete="SELECT *FROM marche WHERE communecode=$codecommune";
    $resultat=$connexion->query($requete);
    
    while($commune=mysqli_fetch_array($resultat))
        {
            $marche=$commune['nom'];
            $code=$commune['code'];


        }

//echo $codecommune;

?>