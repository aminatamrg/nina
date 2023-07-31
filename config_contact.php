
<?php
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
    $nom_complet = $_POST['nom_complet'];
    $telephone = $_POST['telephone'];

    // Validation des données du formulaire
    if (empty($nom_complet) || empty($telephone)) {
        echo "Veuillez remplir tous les champs.";
        exit;
    }

    if (!filter_var($telephone, FILTER_VALIDATE_INT) || strlen($telephone) !== 13) {
        echo '<a href="contact.php">Le numéro de téléphone n_est pas valide. Veuillez entrer un numéro à 12 chiffres.</a>';
        exit;
    }

    // Insertion d'un numéro dans la base de données
    $req = $connexion->prepare('INSERT INTO contact (nom_complet, telephone) VALUES (?, ?)');
    if ($req->execute(array($nom_complet, $telephone))) {
        echo '<a href="index.php">Numéro enregistré avec succès.</a>';
    } else {
        echo "Erreur lors de l'enregistrement. Veuillez réessayer.";
    }
}
?>


   
