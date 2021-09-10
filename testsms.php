<?php
//Start sessiom
$message ="J'étais parti voir l'élève sené à être intelligent où ôtre";
$accentue= array("é", "è", "ê", "ë", "ė","ę","à", "á", "â", "ä","ô", "ö","û", "ü", "ù", "ú");
$normal  = array("E", "e", "e", "e", "e"."e","é", "a", "a", "a","o", "o","u", "u", "u", "u");

$message = str_replace($accentue, $normal, $message);

echo $message;






?>