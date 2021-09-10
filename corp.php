<?php
    require_once('test_googlelogin.php');
	require_once('menu/test_admin.php')
	
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Developpez votre relation client grâce aux Campagnes SMS en RD Congo" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/hk.svg">

	<title>EJ SMS</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
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

	<script src="assets/js/nosajax.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body  page-fade gray" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="index.php">
						<img src="assets/images/Logo EJ SMS-003.png" width="120" alt="" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>
			
               <ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li >
					<a href="corp.php?menu=dh">
						<i class="entypo-gauge"></i>
						<span class="title">Tableau de bord</span>
					</a>
					
				</li>
				<?php
					$id=$_SESSION['id'];
					$types=$_SESSION['types'];

					// if($types=='Invite')
					// {
					echo"
					
					
					<li class=''>
						
						<a href='corp.php?menu=pf'>
							<i class='entypo-user'></i>
							<span class='title'>Profil</span>
						</a>
						
					</li>
                    	";
                // }

					// else
					// 	{
					// 		echo"

					// <li class='has-sub'>
					// 	<a href='corp.php?menu=us'>
					// 		<i class='entypo-user'></i>
					// 		<span class='title'>Utilisateur</span>
					// 	</a>
					// 	<ul>
					// 	<li>
					// 			<a href='corp.php?menu=cr'>
					// 				<span class='title'>Ajouter</span>
					// 			</a>
					// 		</li>
							

					// 		<li>
					// 			<a href='corp.php?menu=mdfu'>
					// 				<span class='title'>Modifier</span>
					// 			</a>
					// 		</li>
					// 		<li>
					// 			<a href='corp.php?menu=del'>
					// 				<span class='title'>Supprimer</span>
					// 			</a>
					// 		</li>
					// 		<li>
					// 			<a href='corp.php?menu=us'>
					// 				<span class='title'>Afficher</span>
					// 			</a>
					// 		</li>
							
					// 	</ul>
					// </li>";
					// }

				?>

				 <li class="">
					<a href="corp.php?menu=zd">
						<i class="glyphicon glyphicon-usd"></i>
						<span class="title">Achetez SMS</span>
						
					</a>
					
				</li>
				
				<li >
					<a href="corp.php?menu=ml">
						<i class="entypo-mail"></i>
						<span class="title">Envoyer SMS</span>
						
					</a>
					
				</li>
				<li class="has-sub">
					<a href="forms-main.html">
						<i class="entypo-users"></i>
						<span class="title">Membre du groupe</span>
					</a>
					<ul>
						<li>
							<a href="corp.php?menu=aj">
								<span class="title">Ajouter</span>
							</a>
						</li>
						
						<li>
							<a href="corp.php?menu=ipr">
								<span class="title">Importer les membres</span>
							</a>
						</li>
						
						<li>
							<a href="corp.php?menu=vm">
								<span class="title">Modifier</span>
							</a>
						</li>
						<li>
							<a href="corp.php?menu=vs">
								<span class="title">Supprimer</span>
							</a>
						</li>
						<li>
							<a href="corp.php?menu=afc">
								<span class="title">Afficher</span>
							</a>
						</li>
						
					</ul>
				</li>
                 <li class="has-sub">
					<a href="extra-icons.html">
						<i class="entypo-bag"></i>
						<span class="title">Groupe </span>
						
					</a>
					<ul>
						<li >
							<a href="corp.php?menu=zd2">
								<span class="title">Ajouter</span>
								
							</a>
							</li>
						
								<li>
									<a href="corp.php?menu=gr">
										<span class="title">Modifier</span>
									</a>
								</li>
								<li>
									<a href="corp.php?menu=grs">
										<span class="title">Supprimer</span>
									</a>
								</li>
								
								<li>
							<a href="corp.php?menu=gra">
										<span class="title">Afficher</span>
							</a>
						      </li>

						
						
						
						
					</ul>
				</li>
				
					<li >
					<a href="corp.php?menu=mb">

						<i class="glyphicon glyphicon-phone"></i>

						<span class="title">Paiement Mobile</span>

					</a>
					
				</li>

				<li >
					<a href="corp.php?menu=py">
						<i class="entypo-chart-bar"></i>
						<span class="title">Rapport SMS</span>
					</a>
					
				</li>
				
				<li>
					<a href="corp.php?menu=ct">
						<i class="entypo-phone"></i>
						<span class="title">Contactez nous </span>
						
					</a>
				</li>
				
				<li>
						<a href="index.php?action=logout">
						<i class="entypo-logout right"></i>	Log Out 
						</a>
					</li>
					
			</ul>
	</div>

	</div>


	<div class="main-content">
				
		<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							
						<?php 
                                

     $pass=$_POST['pass'];
      $login=$_POST['login'];
      $nom=$_SESSION['nom'];
      $prenom=$_SESSION['prenom'];
      $urlphoto=$_SESSION['urlphoto'];

      echo " <img src='$urlphoto' alt='' class='img-circle' width='44' />

 
		    $prenom&nbsp;$nom";
		    

						  ?>
						</a>
		
						
					</li>
		
				</ul>
				
				
					</li>
		
					<!-- Message Notifications -->
					
					</li>
		
					<!-- Task Notifications -->
					
		
				</ul>
		
			</div>
		
		
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
		
					<!-- Language Selector -->
					
						
		
					<li class="sep"></li>
		
					
					<li>
						<a href="#" data-toggle="" data-collapse-sidebar="">
							<i class="entypo-mail"></i>

							<?php
								$id=$_SESSION['id'];
								 $connexion = mysqli_connect("localhost", "eliajimm_sms",  "j'utiliseSMS243","eliajimm_sms");
								$requetesolde="SELECT *FROM solde WHERE solde_client=$id";
								$resultatsolde=$connexion->query($requetesolde);
								$solde=mysqli_fetch_array($resultatsolde);
								$quantite_achetee=$solde['quantite_achetee'];
								$quantite_consommee=$solde['quantite_consommee'];

								$solde_restant=$quantite_achetee-$quantite_consommee;
								$solde_restant=$quantite_achetee-$quantite_consommee;
								$quantite_acheteet=$solde_restant+$quantite_consommee;
							    $quantite_consommee=$quantite_acheteet-$solde_restant;
								echo"Solde:<span style='background:green; padding:2px; color:white; border-radius:2px;'> $solde_restant </span>";
							
							?>
		
						</a>
					</li>
		
					<li class="sep"></li>
		
					<li>
						<a href="index.php?action=logout">
							Log Out <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>
		
			</div>
		
		</div>
		
		<hr />
              
<?php 
			
			if(!(isSet($_GET['menu'])))	
				{
					require_once('menu/dashe.php');
				}

			
			else
				{
					$menu=$_GET['menu'];

					switch ($menu) 
						{

							case 'ajt':
								require_once('menu/form.php');
								break;
						


								case 'sms':
									require_once('menu/sendsms.php');
									break;


							case 'zd2':
								require_once('menu/zando2.php');
								break;


							case 'eff':
								require_once('menu/efface.php');
								break;
                            
                            case 'mb':

								require_once('menu/form_mobile.php');

								break;
								
							case 'mba':

								require_once('menu/action_mobile.php');

								break;
                            
							case 'afcc':
								require_once('menu/action_eff.php');
								break;

							case 'insert':
								require_once('menu/langue.php');
								break;

							case 'mf':
								require_once('menu/modifier_ul.php');
								break;

							case 'actu':
								require_once('menu/action_modifier_ul.php');
								break;

							case 'pfl':
								require_once('menu/action_profil.php');
								break;

							case 'afc':
								require_once('menu/vendeur.php');
								
								break;

							case 'vm':
								require_once('menu/vendeur_m.php');
								
								break;


							case 'gr':
								require_once('menu/groupeafc.php');
								
								break;


							case 'pf':
								require_once('menu/profil.php');
								
								break;


							case 'mpesa':
								require_once('menu/envoyerpopup.php');
									
								break;

							case 'paypal':
								require_once('menu/paypal.php');
										
								break;


							case 'vma':
								require_once('menu/modifier_v.php');
								
								break;


							case 'act':
								require_once('menu/vendeur_act.php');
								
								break;


							case 'grs':
								require_once('menu/groupe_s.php');
								
								break;

							case 'gra':
								require_once('menu/groupe.php');
								
								break;



							case 'vs':
								require_once('menu/vendeur_s.php');
								
								break;

							case 'ct':
								require_once('menu/contact.php');
								
								break;

							case 'su':
								require_once('menu/supprime.php');
								break;

							case 'dtte':
								require_once('menu/delette.php');
								break;



							case 'dh':
								require_once('menu/dashe.php');
								
								break;

							case 'py':
								require_once('menu/payes.php');
								
								break;
								
							case 'non':
								require_once('menu/non_payes.php');
								
								break;

								case 'aj':
									require_once('menu/form.php');
									
									break;

								case 'us':
									require_once('menu/user.php');
									
									break;

									case 'cr':
									require_once('menu/creer.php');
									
									break;

									case 'mdfu':
									require_once('menu/modifier_utilis.php');
									
									break;



								case 'zd':
									require_once('menu/zando.php');
									
									break;

								case 'zd1':
									require_once('menu/action_gr_modifier.php');
									
									break;

								case 'ma':
									require_once('menu/marche.php');
									
									break;

								case 'mas':
									require_once('menu/marche_s_action.php');
									
									break;


								case 'ama':
									require_once('menu/action_marche.php');
									
									break;

                               case 'del':
									require_once('menu/userdel.php');
									
									break;

								 case 'dll':
									require_once('menu/userdel_action.php');
									
									break;

								case 'dlt':
									require_once('menu/userdelette.php');
									
									break;

								case 'mch':
									require_once('menu/marche_s.php');
									
									break;

								case 'mmm':
										require_once('menu/payement.php');
										
										break;



									case 'mzd':
										require_once('menu/modifier_zd.php');
										
										break;

									case 'iv':
										require_once('menu/formulair.php');
										
										break;


									case 'ml':
										require_once('menu/mail.php');
										break;

									case 'cg':
										require_once('menu/zando2_action.php');
										
										break;

									case 'mgrp':
										require_once('menu/membres_groupes.php');
										
										break;
										
									case 'kmp':
										require_once('menu/clientmail.php');
										
										break;
										
										case 'ipr':
										require_once('menu/importe.php');
										
										break;
										
                                	case 'undel':
										require_once('menu/undeliv.php');
										
										break;

                                    case 'sprund':
										require_once('menu/suppr_undeliv.php');
										
										break;   
						}
												
				}
			
			
			
			
			
			
			
		?>


		<hr />
		<!-- Footer -->
		<footer class="main">
			
			
		
		</footer>
	</div>

		
	<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
	
		<div class="chat-inner">
	
	
			<h2 class="chat-header">
				<a href="#" class="chat-close"><i class="entypo-cancel"></i></a>
	
				<i class="entypo-users"></i>
				Chat
				<span class="badge badge-success is-hidden">0</span>
			</h2>
	
	
			<div class="chat-group" id="group-1">
				<strong>Favorites</strong>
	
				<a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
				<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
				<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
				<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
			</div>
	
	
			<div class="chat-group" id="group-2">
				<strong>Work</strong>
	
				<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
				<a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
				<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
			</div>
	
	
			<div class="chat-group" id="group-3">
				<strong>Social</strong>
	
				<a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>
				<a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>
			</div>
	
		</div>
	
		<!-- conversation template -->
		<div class="chat-conversation">
	
			<div class="conversation-header">
				<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>
	
				<span class="user-status"></span>
				<span class="display-name"></span>
				<small></small>
			</div>
	
			<ul class="conversation-body">
			</ul>
	
			<div class="chat-textarea">
				<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
			</div>
	
		</div>
	
	</div>
	
	
	<!-- Chat Histories -->
	<ul class="chat-history" id="sample_history">
		<li>
			<span class="user">Art Ramadani</span>
			<p>Are you here?</p>
			<span class="time">09:00</span>
		</li>
	
		<li class="opponent">
			<span class="user">Catherine J. Watkins</span>
			<p>This message is pre-queued.</p>
			<span class="time">09:25</span>
		</li>
	
		<li class="opponent">
			<span class="user">Catherine J. Watkins</span>
			<p>Whohoo!</p>
			<span class="time">09:26</span>
		</li>
	
		<li class="opponent unread">
			<span class="user">Catherine J. Watkins</span>
			<p>Do you like it?</p>
			<span class="time">09:27</span>
		</li>
	</ul>
	
	
	
	
	<!-- Chat Histories -->
	<ul class="chat-history" id="sample_history_2">
		<li class="opponent unread">
			<span class="user">Daniel A. Pena</span>
			<p>I am going out.</p>
			<span class="time">08:21</span>
		</li>
	
		<li class="opponent unread">
			<span class="user">Daniel A. Pena</span>
			<p>Call me when you see this message.</p>
			<span class="time">08:27</span>
		</li>
	</ul>

	
</div>





	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="assets/js/raphael-min.js"></script>
	<script src="assets/js/morris.min.js"></script>
	<script src="assets/js/toastr.js"></script>
	<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>