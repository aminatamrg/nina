<?php
// Vérification des informations du formulaire
if (isset($_POST['email']) && isset($_POST['mot_passe'])) {
    // Mettre l'email et le mot de passe dans des variables
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

        // Requête pour sélectionner l'utilisateur qui a pour email les informations de la base de données
        $req = $connexion->prepare("SELECT * FROM docteur WHERE email=:email");
        $req->execute(array(':email' => $email));
        $res = $req->fetch(PDO::FETCH_ASSOC);

        // Vérification du mot de passe en utilisant password_verify
        if ($res) {
            $passwordHach = $res['mot_passe'];
            if (password_verify($mot_passe, $passwordHach)) {
                // Redirection vers une autre page après une authentification réussie
                header("Location: Accueil.php");
                exit(); // Ajouter cette instruction pour arrêter l'exécution du script
            } else {
                echo '<a href="page_Authentification.php">Adresse email ou mot de passe incorrects</a>';
            }
        } else {
            echo '<a href="page_Authentification.php">Adresse email ou mot de passe incorrects</a>'; // au cas où la connexion échoue
        }
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
    }
}
?>
