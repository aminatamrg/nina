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

// Vérification des informations du formulaire
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['daate']) && isset($_POST['heure']) && isset($_POST['motif'])) {

    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $daate = $_POST['daate'];
    $heure = $_POST['heure'];
    $motif = $_POST['motif'];

  

        // Insérer les données dans la base de données
        $requete = $connexion->prepare("INSERT INTO calendrier (nom, prenom, daate, heure, motif) VALUES (:nom, :prenom, :daate, :heure, :motif)");
        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':daate', $daate);
        $requete->bindParam(':heure', $heure);
        $requete->bindParam(':motif', $motif);

        // Exécuter la requête
        if ($requete->execute()) {
            echo '<a href="Accueil.php">Le rendez-vous a été enregistré avec succès!</a>';
        } else {
            echo '<a href="Fiche de rendez vous.php">Une erreur s est produite lors de l_enregistrement du rendez-vous.</a>';
        }
    }
?>

