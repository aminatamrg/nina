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
    exit(); // Quitter le script en cas d'erreur de connexion
}

// Vérification si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $nom_prenom = $_POST['nom_prenom'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];
    $ville = $_POST['ville'];
    $mot_passe = $_POST['mot_passe'];
    $confirmation_mot_passe = $_POST['confirmation_mot_passe'];
    $genre = $_POST['genre'];

    // Validation des données du formulaire
    if (empty($nom_prenom) || empty($email) || empty($mot_passe) || empty($confirmation_mot_passe)) {
        echo "Tous les champs obligatoires doivent être remplis.";
        exit();
    }

    if ($mot_passe !== $confirmation_mot_passe) {
        echo '<a href="registration.php">Les mots de passe ne correspondent pas.</a>';
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<a href="registration.php">L_adresse email n_est pas valide.</a>';
        exit();
    }

    // Hachage du mot de passe avant de l'insérer dans la base de données
    $mot_passe_hashed = hashPassword($mot_passe);

    // Vérification si l'email est déjà utilisé
    $req = $connexion->prepare("SELECT COUNT(*) AS nb_patient FROM patient WHERE email = ?");
    $req->execute(array($email));
    $resultat = $req->fetch();
    if ($resultat['nb_patient'] > 0) {
        echo '<a href="registration.php">Cet email est déjà utilisé.</a>';
        exit();
    }

    // Insertion du patient dans la base de données
    $req = $connexion->prepare('INSERT INTO patient (nom_prenom, email, adress, ville, mot_passe, genre) VALUES (?, ?, ?, ?, ?, ?)');
    if ($req->execute(array($nom_prenom, $email, $adress, $ville, $mot_passe_hashed, $genre))) {
        echo '<a href="gestion_patient.php">Patient enregistré avec succès.</a>';
    } else {
        echo '<a href="registration.php">Erreur lors de l\'enregistrement. Veuillez réessayer.</a>';
    }
}
?>
