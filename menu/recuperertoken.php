<?php
  //Recuperation token MPESA
$soap_request  = "<?xml version=\"1.0\"?>\n";
$soap_request .= "<soapenv:Envelope xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\"  xmlns:soap=\"http://www.4cgroup.co.za/soapauth\" xmlns:gen=\"http://www.4cgroup.co.za/genericsoap\">\n";
$soap_request .= "   <soapenv:Header> <soap:EventID>2500</soap:EventID></soapenv:Header>\n";

$soap_request .= "  <soapenv:Body>\n";

$soap_request .= "    <gen:getGenericResult>\n";
$soap_request .= "   <Request><dataItem><name>Username</name><type>String</type><value>jimmyelia</value></dataItem><dataItem><name>Password</name><type>String</type><value>BA5v#@6p^?DUA7yJ</value></dataItem></Request>\n";
$soap_request .= "     </gen:getGenericResult>\n";
$soap_request .= "  </soapenv:Body>\n";
$soap_request .= "</soapenv:Envelope>";

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

    //print $output;
}



    $search='S:Body';
    $replace='Body';
    $output=str_replace ($search, $replace, $output);

    $search='ns2:getGenericResultResponse';
    $replace='getGenericResultResponse';
   $output=str_replace ($search, $replace, $output);


    $xml = new SimpleXMLElement($output);
    //$xml = simplexml_load_string($soap_response);

    //Recuperer Token
    $token=$xml->Body->getGenericResultResponse->SOAPAPIResult->response->dataItem->value;

?>