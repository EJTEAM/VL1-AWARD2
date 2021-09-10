<?php

$json = '{
  "iss": "accounts.google.com",
  "azp": "784114177842-jgqpelf479fete0e9u1gss0umv84rqbc.apps.googleusercontent.com",
  "aud": "784114177842-jgqpelf479fete0e9u1gss0umv84rqbc.apps.googleusercontent.com",
  "sub": "104142403034783020542",
  "email": "eliajimmy1@gmail.com",
  "email_verified": "true",
  "at_hash": "jXiUPZ5LqnGhdlzPRlNswA",
  "name": "jimmy elia",
  "picture": "https://lh3.googleusercontent.com/a-/AOh14Ggnq8KLQjYmltW2DxGsn-0fKfSLnOtjqzrJg4B2fg=s96-c",
  "given_name": "jimmy",
  "family_name": "elia",
  "locale": "fr",
  "iat": "1617450861",
  "exp": "1617454461",
  "jti": "24ffe03ce411f934b65be7f4dc5874435f8962cf",
  "alg": "RS256",
  "kid": "13e8d45a43cb2242154c7f4dafac2933fea20374",
  "typ": "JWT"
}';

$obj = json_decode($json);
$email=$obj->{'email'};
$gid=$obj->{'sub'};
$noms=$obj->{'name'};
$prenom=$obj->{'given_name'};
$nom=$obj->{'family_name'};
$urlprofile=$obj->{'picture'};

echo"email : $email, nom : $nom, prenom : $prenom, noms : $noms, gid : $gid, <br> <img src='$urlprofile'>";

?>
 