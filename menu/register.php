<?php


	$connexion= mysqli_connect("localhost","marcherd_ejsarl","eliamaisongo@","marcherd_recoltes");
    //$connexion= mysqli_connect("localhost","eliajimm_ejhost","j'utiliseLGsmartTV","eliajimm_payement");
    $email=$_POST['email'];
    $motpasse=$_POST['motpasse'];
    $telephone=$_POST['telephone'];
     $nom=$_POST['nom'];

    


    $requet="INSERT INTO compte(nom,email,telephone,motpasse)VALUES('$nom','$email','$telephone','$motpasse')";
    $resultat=$connexion->query($requet)
    


    
    
	?>

	

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>hotel de ville</title>

<link rel="stylesheet" href="build/css/intlTelInput.css">

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">
<link rel="stylesheet" href="build/css/intlTelInput.css">
  <link rel="stylesheet" href="build/css/demo.css">

	<script src="assets/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body login-page login-form-fall" data-url="http://neon.dev">


<!-- This is needed when you send requests via Ajax -->
<script type="text/javascript">
var baseurl = '';
</script>
	
<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="index.html" class="logo">
				<img src="assets/images/111.jpg" width="120" alt="" class="img-circle" style="border: solid;" />
			</a>
			
			<p class="description">Créez votre compte gratuit dès aujourd'hui !</p>
			
			<!-- progress bar indicator -->
		
		</div>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<form method="POST" action="register.php" role="form" >
				
				<div class="form-register-success">
					<i class="entypo-check"></i>
					<h3>Créez votre compte gratuit dès aujourd'hui !</h3>
					<p> Pas d'engagement. Pas de carte de crédit requise</p>
				</div>
				
				<div class="form-steps">
					
					<div class="step current" id="step-1">


						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-phone"></i>
								</div>
								
								<input type="text" class="form-control" name="nom" id="phone" placeholder="" d autocomplete="off" />
							</div>
						</div>
					
						<div class="form-group">
							<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-mail"></i>
						</div>
						
						<input type="text" class="form-control" name="email" id="username" placeholder="Votre adresse email" autocomplete="off" />
					</div></div>
					
						
			
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-phone"></i>
								</div>
								
								<input type="text" class="form-control" name="telephone" id="phone" placeholder="telephone" data-mask="phone" autocomplete="off" />
							</div>
						</div>
					
						
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-lock"></i>
								</div>
								
								<input type="password" class="form-control"  name="motpasse" id="password" placeholder="mot de passe" autocomplete="off" />
							</div>
						</div>

						
						
						
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-block btn-login">
								<i class="entypo-right-open-mini"></i>
								Valider
							</button>
						</div>
						
						
					</div>
					
				</div>
				
			</form>
			
			
			<div class="login-bottom-links">
				
				
				
				<br />
				
				 <a href="#"> ← Connexion</a>- <a href="#">Mot de passe oublié?</a> 
				
			</div>
			
		</div>
		
	</div>
	
</div>


	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/neon-register.js"></script>
	<script src="assets/js/jquery.inputmask.bundle.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>