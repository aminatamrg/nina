<?php
// Fonction pour hacher le mot de passe
function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

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
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

// Vérification si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $nom_prenom = $_POST['nom_prenom'];
    $email = $_POST['email'];
    $mot_passe = $_POST['mot_passe'];
    $confirmation_mot_passe = $_POST['confirmation_mot_passe'];
    $contact = $_POST['contact']; 
    $genre = $_POST['genre'];

    // Vérification si les mots de passe correspondent
    if ($mot_passe !== $confirmation_mot_passe) {
        echo '<a href="registre_doc.php">Les mots de passe ne correspondent pas.</a>';
        exit();
    }

    // Hachage du mot de passe avant de l'insérer dans la base de données
    $mot_passe_hashed = hashPassword($mot_passe);

    // Vérification si l'email est déjà utilisé
    $req = $connexion->prepare("SELECT COUNT(*) AS nb_docteur FROM docteur WHERE email = ?");
    $req->execute(array($email));
    $resultat = $req->fetch();
    if ($resultat['nb_docteur'] > 0) {
        echo '<a href="registre_doc.php">Cet email est déjà utilisé.</a>';
        exit();
    }

    // Insertion du patient dans la base de données
    $req = $connexion->prepare('INSERT INTO docteur (nom_prenom, email, mot_passe, contact, genre) VALUES (?, ?, ?, ?, ?)');
    if ($req->execute(array($nom_prenom, $email, $mot_passe_hashed, $contact, $genre))) {
        echo '<a href="page_Authentification.php">Docteur enregistré avec succès.cliquer ici pour vous connecter</a>';
    } else {
        echo '<a href="registre_doc.php">Erreur lors de l\'enregistrement, Veuillez réessayer.</a>';
    }
}
?>
