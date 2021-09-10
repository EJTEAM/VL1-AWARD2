<?php

	//require_once('menu/test_login.php')
	
?> 



<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Vodacom ligue 1" />
    <meta name="author" content="" />
  

	<link rel="icon" href="assets/images/hk.svg">

	<title>VodacomVl1 Award</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<link rel="stylesheet" href="assets/css/skins/red.css">

	<script src="assets/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body login-page login-form-fall" data-url="http://neon.dev">




<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="index.php" class="logo">
				<img src="assets/images/logo_vl144444.png" width="120" alt="" "  />
			</a>
			
			<p class="description" style="font-size: 20px;">
 			
 				<?php 
		    
		         
		  if(isSet($_GET['op'])) 
				{
					echo"Veuillez insérer vos coordonnées ou créer votre compte";
					
				}
		    	else
		    	{
		    	     echo"Envoi de SMS par Internet";
		    	}
 		
 			?>
			</p>
			
			<!-- progress bar indicator -->
			
		</div>
		
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
		<?php
			//Formulaire de connexion
			if(isSet($_GET['op']))
				{
					require_once("formnewuser.php");	
				}
			//Traitement de la creation de compte
			else if(isSet($_POST['newuser']))
				{
					require_once("menu/newuser.php");
					
        }
	 
		//Traitement de la connexion
		else if (isSet($_GET['log']))
          {
            require_once("menu/newuserlog.php");
                    
		  }
		 
		  //Formulaire completer email et telephone apres etre connecté à partir de Facebook
		else if(isSet($_SESSION['newfb']))
			{
				require_once("formnewuser.php");	
			}

		//Formulaire connexion
		else
			{
					require_once("formlogin.php");
       		 }
     

		?>
			
				
			
			
			
		
		
				
				
			
			
		</div>
		
	</div>
	
</div>

<SCRIPT TYPE="text/javascript">

$('#confirmerpassword').keyup(function(evenement)
	{
			var password = $('#password').val();
			var confirmerpassword = $('#confirmerpassword').val();



			if(password==confirmerpassword)
				{
					//alert('Mot de passe identique');
					$('#cmp').css('background','green');
					$('#cmp').css('color','white');
					$('#cmp').css('padding','5px');
					$('#cmp').html('Mot de passe Identique');
				}
			else
				{
					//alert('Mot de passe non identique');
					$('#cmp').css('background','red');
					$('#cmp').css('color','white');
					$('#cmp').css('padding','5px');
					$('#cmp').html('Mot de passe incorrect');
				}

			

	}
)

		</script>

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/neon-login.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
    <script src="assets/js/neon-demo.js"></script>
    
  

</body>
</html>