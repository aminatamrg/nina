<?php
if ((isset($_POST['email'])) && (isset($_POST['mot_passe']))) {
    // mettre l'email et le mot de passe dans des variables
    $email = $_POST['email'];
    $mot_passe = $_POST['mot_passe'];

    // Informations d'identification
    define('USER', 'root');
    define('PASSWORD', '');
    define('HOST', 'localhost');
    define('DATABASE', 'aminata');

    try {
        // Connexion à la base de données MySQL
        $connexion = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE, USER, PASSWORD);

        // Définir le mode d'erreur de PDO sur Exception
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }  catch (PDOException $e) {
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
    }

        // Requête préparée pour éviter les attaques par injection SQL
        $req = $connexion->prepare("SELECT * FROM patient WHERE email = :email ");
        $req->bindParam(':email', $email);
        $req->execute();
        $res = $req->fetch(PDO::FETCH_ASSOC);

        // Vérification du mot de passe en utilisant password_verify
        if ($res) {
            $passwordHach = $res['mot_passe'];
            if (password_verify($mot_passe, $passwordHach)) {
                // Redirection vers une autre page après une authentification réussie
                header("Location: Accueil_user.php");
                exit(); // Ajouter cette instruction pour arrêter l'exécution du script
            } else {
                echo '<a href="user-login.php">Email ou Mot de passe incorrect.</a>'; // au cas où la connexion échoue
            }
}
}
?>
