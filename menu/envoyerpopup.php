
<?php

$telephone=intval($_SESSION['telephone']);
$id=$_SESSION['id'];


//Verifier si c'est un numero Vodacom
$telephonex=$_SESSION['telephone'];
$taille=strlen($telephonex);
$quatrepremierschiffre=substr($telephonex, 0, 4);
if(($taille==12)&&($quatrepremierschiffre==2438))
    {
        $token=$_GET['token'];
        $montant=$_GET['prix'];
        $productid=$_GET['productid'];
        $devise="USD";
        $service=$_GET['service'];
        $service=$service."SMS";
        $dates = date("d-m-Y");
            
        $urlresultat="https://sms.eliajimmy.net/recupererresultat.php";

        $heurexx = date("H:i:s");
        $h=substr($heurexx, 0,2);
        $m=substr($heurexx, 3,2);
        $s=substr($heurexx, 6,2);
        $idtransaction=$h.$m.$s.$telephone;


        //Enregistrement de la commande
        $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");
        $requete="INSERT INTO commande(`com_client`, `com_produit`, `date`, `heure`, `idtransaction`, `token`)VALUES($id,$productid,'$dates','$heurexx','$idtransaction','$token')";
        $resultat=$connexion->query($requete);

        $soap_request  = "<soapenv:Envelope xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:soap=\"http://www.4cgroup.co.za/soapauth\" xmlns:gen=\"http://www.4cgroup.co.za/genericsoap\"> 
        <soapenv:Header>
        <soap:Token xmlns:soap=\"http://www.4cgroup.co.za/soapauth\">$token</soap:Token>
        <soap:EventID>80049</soap:EventID></soapenv:Header>
        <soapenv:Body> <gen:getGenericResult>
        <Request> <dataItem>
        <name>CustomerMSISDN</name> <type>String</type>
        <value> $telephone</value>
        </dataItem> <dataItem>
        <name>ServiceProviderCode</name> <type>String</type>
        <value>8405</value>
        </dataItem> <dataItem>
        <name>Currency</name> <type>String</type>
        <value>$devise</value>
        </dataItem> <dataItem>
        <name>Amount</name> <type>String</type>
        <value>$montant</value>
        </dataItem> <dataItem>
        <name>Date</name> <type>String</type> <value>$dates</value>
        </dataItem> <dataItem>
        <name>ThirdPartyReference</name> <type>String</type> <value> $idtransaction</value>
        </dataItem> <dataItem>
        <name>CommandId</name>
        <type>String</type>
        <value>InitTrans_Paybillfootballscore</value> </dataItem>
        <dataItem> <name>Language</name>
        <type>String</type>
        <value>FR</value> </dataItem>
        <dataItem> <name>CallBackChannel</name>
        <type>String</type>
        <value>2</value> </dataItem>
        <dataItem> <name>CallBackDestination</name>
        <type>String</type>
        <value>$urlresultat</value> </dataItem>
        <dataItem> <name>Surname</name>
        <type>String</type>
        <value>$service</value> </dataItem>
        <dataItem> <name>Initials</name>
        <type>String</type>
        <value>EJ</value> </dataItem>
        </Request> </gen:getGenericResult>
        </soapenv:Body> </soapenv:Envelope>";

        $header = array(
                    "Content-type: text/xml;charset=\"utf-8\"",
                    "Accept: text/xml",
                    "Cache-Control: no-cache",
                    "Pragma: no-cache",
                    "SOAPAction: \"run\"",
                    "Content-length: ".strlen($soap_request),
                    );

        $soap_do = curl_init();
        curl_setopt($soap_do, CURLOPT_URL, "https://41.78.195.170:8091/insight/SOAPIn");
        curl_setopt($soap_do, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($soap_do, CURLOPT_TIMEOUT,        10);
        curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true );
        curl_setopt($soap_do, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($soap_do, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($soap_do, CURLOPT_POST,           true );
        curl_setopt($soap_do, CURLOPT_POSTFIELDS,     $soap_request);
        curl_setopt($soap_do, CURLOPT_HTTPHEADER,     $header);



        if(curl_exec($soap_do) === false) {
        $err = 'Curl error: ' . curl_error($soap_do);
        curl_close($soap_do);
        print $err;
        } else {
        $output = curl_exec($soap_do); 
        curl_close($soap_do);


        $search='S:Body';
        $replace='Body';
        $output=str_replace ($search, $replace, $output);

        $search='ns2:getGenericResultResponse';
        $replace='getGenericResultResponse';
        $output=str_replace ($search, $replace, $output);


        $xml = new SimpleXMLElement($output);
        //$xml = simplexml_load_string($soap_response);

        $InsightReference=$xml->Body->getGenericResultResponse->SOAPAPIResult->response->dataItem[0]->value;

        $ResponseCode=$xml->Body->getGenericResultResponse->SOAPAPIResult->response->dataItem[1]->value;

        //$ResponseCode==0, donc c'est bon

        echo"<h3 style='color:green;'>Regardez votre téléphone  ayant ce numero $telephone pour valider  le paiement.<br>Vous n’avez rien vu ? réessayer en cliquant ici <a href=''><button class='btn btn-warning'>Renvoyé</button></a></h3>
        ";
            
             require_once('menu/dashe.php');
        }
    }
else
    {
        echo"<h4 style='color:red;'>Nous avons remarqué que vous n'avez pas encore enregistré un numero vodacom Mpesa ou vous l'avez mal enregistré. Commencez par ajouter un numero Vodacom Mpesa avec 243 au debut (ex: 243815250190), ensuite allez dans le menu <span style='color:blue;'>Achetez SMS</span> et commandez, puis payez par Mpesa</h4>";
        require_once('menu/form_mobile.php'); 
    }
?>
