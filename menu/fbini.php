<?php
//Start sessiom
session_start();
require('vendor/autoload.php');

$fb = new Facebook\Facebook([

    'app_id' => '274699830996911',
   
    'app_secret' => '4408e70021ca43954b3f8e0ff9e0363c',
   
    'default_graph_version' => 'v10.0',
   
   ]);

   $helper = $fb->getRedirectLoginHelper();

   $login_url = $helper->getLoginUrl("https://sms.eliajimmy.net");

    try {
        
        $accessToken = $helper->getAccessToken();
        if(isset($accessToken))
            {
                $_SESSION['email']= (string) $accessToken; //Convert token to string

                $_SESSION['fbsession']= "sessionfacebook";
                //if session stard, we redirect to index.php
                header("Location:corp.php") ; 
            }
    } catch (Exception $exc) {
        //echo $exc->getTraceAsString();
    }

    //get users info like name, email
    if(isSet($_SESSION['email']))
        {
             try {
                    $fb->setDefaultAccessToken($_SESSION['email']);
                    $res = $fb->get('/me?fields=name,first_name,last_name,email');
                    $requestPicture = $fb->get('/me/picture?redirect=false&height=200'); //getting user picture
                    $picture = $requestPicture->getGraphUser();
                    $profile = $res->getGraphUser();

                    $fbid = $profile->getProperty('id');           // To Get Facebook ID

                    $noms = $profile->getProperty('name');   // To Get Facebook full name

                    $fbemail = $profile->getProperty('email');    //  To Get Facebook email

                    $url=$picture['url'];

                    $_SESSION['fb_id'] = $fbid;

                    $_SESSION['fb_name'] = $noms;

                    $_SESSION['fb_email'] = $fbemail;

                    $_SESSION['fb_pic'] = $fbpic;
               
                   // echo "je suis $noms, mon id est $fbid et mon adresse e-mail est $fbemail <img src='".$picture['url']."' class='img-rounded'/>";
                
             } catch (Exception $exc) {
                //echo $exc->getTraceAsString();
             }
        }

?>