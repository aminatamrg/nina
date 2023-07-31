<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connection Docteur</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/themes/theme-1.css" id="skin_color">
    <link rel="stylesheet" href="style_1.css">
</head>
<body class="login">
    <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="logo margin-top-30">
            <h1>Connection Docteur</h1>
        </div>

        <div class="box-login">
            <form action="config.php" method="post">
                <fieldset>
                    <legend>Connectez-vous à votre compte</legend>
                    <p>Entrer votre email et mot de passe pour vous connecter</p>

                    <div class="input-icon">
                        <label for="email">Email</label><br>
                        <input type="text" name="email" id="email" placeholder="Votre mail" required><br>
                    </div>

                    <div class="input-icon">
                        <label for="mot_passe">Mot de passe</label><br>
                        <input type="password" name="mot_passe" id="mot_passe" placeholder="Votre mot de passe" required><br>
                    </div>
                    <input type="submit" name="submit" value="Connexion">
                    <p>
                        Vous n'avez pas encore de compte?
                        <a href="registre_doc.php">Créer un compte</a>
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>
