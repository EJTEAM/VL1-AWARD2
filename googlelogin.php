<?php
    
    // init configuration
	$clientID = '784114177842-jgqpelf479fete0e9u1gss0umv84rqbc.apps.googleusercontent.com';
	$clientSecret = 'oEN-2PcziR2LkBRMYmuKUlLo';
    $redirectUri = 'https://sms.eliajimmy.net/corp.php';
				
	// create Client Request to access Google API
	$client = new Google_Client();
	$client->setClientId($clientID);
	$client->setClientSecret($clientSecret);
	$client->setRedirectUri($redirectUri);
	$client->addScope("email");
	$client->addScope("profile");
            
    echo '
				
			<div class="form-group">
							
                    <a href="'.$client->createAuthUrl().'">

                            <button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left google-button">
                                Se connecter avec Google
                                <i class="entypo-google"></i>
                            </button>
                    </a>
						
			</div>';
		
?>