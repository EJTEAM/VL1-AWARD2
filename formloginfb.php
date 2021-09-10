<form method="POST" action="index.php"  >
				

                <h4 style="color: red;"><?php
              
                 echo $messages['email'];?></h4>

				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-mail"></i>
						</div>
						<input type="text" class="form-control" name="email" id="username" required placeholder="Votre adresse email" autocomplete="off" />
					</div>
					
				</div>
				
				<div class="form-group">
					<h4 style="color: red;"><?php
              
                 echo $messages['motpasse'];?></h4>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						
						<input type="password" class="form-control" name="motpasse" required id="password" placeholder="Votre Mot de passe" autocomplete="off" />
					</div>
				
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						Connexion
					</button>
				</div>
			
            </form>
            
            
            <div class="form-group">
				
                <a href="<?php echo $login_url; ?>">
                    
                    <button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left facebook-button">
					    Se connecter avec Facebook
						<i class="entypo-facebook"></i>
					</button></a>
					
				</div>
            
            <div class="login-bottom-links">
				
				<a href="https://sms.eliajimmy.net/index.php?op=newuser&id=$codeproduit" class="link">Creer un Compte</a>
				
                <br />
                
                </div>