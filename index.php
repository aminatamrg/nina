
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Connection Docteur</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="css/themes/theme-1.css" id="skin_color" />
        <link rel="stylesheet" href="style_1">
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

		
	</head>
	<body class="login">
	
		
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
					<h1> | Connection Docteur</h1>
				</div>
				<div class="box-login">
					<form action="config.php" method="post">
					<header>
	                  <div class="top-nav">
                        <ul>
                          <li><a href="../index.php">Accueil</a></li>
                        </ul>
                      </div>
                    </header>
						<fieldset>
							<legend>
								Connecter vous a votre compte
							</legend>
							<p>
								Entrer votre Email et mot_passe pour vous connecter</br>
							</p>
							
								<span class="input-icon">
									<label >Email</label></br>
									<input type="text"  name="email" placeholder="votre mail" required></br>
									 </span>
							
								<span class="input-icon">
									<label>Mot de passe</label></br>
									<input type="password" name="mot_passe" placeholder="votre mot_passe" required></br>
									</span>
								
								<input type="submit" name="submit" value="connexion">
						</fieldset>
					</form>
				</div>

			</div>
	</body>
	
</html>
