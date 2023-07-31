

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Enregistrement Patient</title>
		<meta charset="utf-8" />
	<style>
	* {
        margin: 60;
        padding: 60;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
	body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background-color: aquamarine;
    }
	section {
        background-color: rgb(143, 143, 24);
        padding: 20px;
        display: flex;
        flex-direction: column;
        width: 650px;
        border-radius: 6px;
    }
	form input{
       margin: 8px 0;
       padding: 9px 20px;
       outline: 0;
       border: 2PX solid;
       border-radius: 4PX;
    }
	form input [type='submit'] {
       background-color: aqua;
       color: black;
       border: 0;
       margin-top: 20px;
       padding: 6px 0;
    }
	section h1{
       text-align: center;
    }
    section h2{
       text-align: center;
	}
	</style>
	</head>

	<body class="login">
		    <SEction>
				<h2>Fiche d'inscription</h2>
				<!-- start: REGISTER BOX -->
				<div class="box-register">
					<form method="post" action="config_doc.php">
						<fieldset>
							<legend>
								S_inscrire
							</legend>
							<p>
								Entrer vos donnée
							</p>
							
							<label>Nom et prenom</label></br>
							<input type="text" name="nom_prenom" placeholder="votre prenom" required></br>
                            <label>Email</label></br>
							<input type="text" name="email" placeholder="votr mail" required></br>
							<label for="mot_passe">Mot de passe :</label></br>
		                    <input type="password" name="mot_passe" required></br>
		                    <label for="confirmation_mot_passe">Confirmation du mot de passe :</label></br>
		                    <input type="password" name="confirmation_mot_passe" required></br>
                            <label >contact</label></br>
							<input type="text"  name="contact" placeholder="contact" required></br>
						
								<label for="genre">Genre :</label>
		                        <select name="genre">									
			                       <option value="homme">Homme</option>
			                       <option value="femme">Femme</option>
			                       <option value="autre">Autre</option>
		                        </select>
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="agree" value="agree" required>
									<label for="agree">
										j accepte
									</label>
								</div>

							<div class="form-actions">
								<input type="submit"  name="Enregistrer">
							</div>
							<p>
								avez vous un compte?
								<a href="page_Authentification.php">Connexion</a>
							</p>
						</fieldset>
					</form>
				</div>
			</SEction>
	</body>
</html>
