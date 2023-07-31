<!DOCTYPE html>
	<head>
		<title>Connexion Utilisateurs</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style_k.css">
	</head>
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
					<h1> MedicoFILE | Connexion Patient</h1>
				</div>
				<div class="box-login">
					<section>
					<form class="form-login" action= "config_user.php" method="post">
							
					<p>Veuillez saisir votre nom et votre mot de passe pour vous connecter. </p><br />
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="email" placeholder="votre mail" required>
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="mot_passe" placeholder="mot_passe" required>
									<i class="fa fa-lock"></i>
									 </span>
							</div>
							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									Connexion <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							</div>
					</form>
					</section>
				</div>
			</div>
		</div>
	</body>

</html>
