<?php
// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=gestion_patients';
$username = 'utilisateur';
$password = 'motdepasse';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

// Fonction pour ajouter un nouveau patient
function ajouter_patient($nom, $prenom, $date_naissance, $adresse, $telephone) {
	global $db;

	$sql = "INSERT INTO patients (nom, prenom, date_naissance, adresse, telephone) VALUES (:nom, :prenom, :date_naissance, :adresse, :telephone)";
	$stmt = $db->prepare($sql);
	$stmt->bindParam(':nom', $nom);
	$stmt->bindParam(':prenom', $prenom);
	$stmt->bindParam(':date_naissance', $date_naissance);
	$stmt->bindParam(':adresse', $adresse);
	$stmt->bindParam(':telephone', $telephone);
	$stmt->execute();
}

// Fonction pour récupérer la liste des patients
function liste_patients() {
	global $db;

	$sql = "SELECT * FROM patients ORDER BY nom ASC";
	$stmt = $db->query($sql);
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Fonction pour rechercher un patient par nom
function rechercher_patient($nom) {
	global $db;

	$sql = "SELECT * FROM patients WHERE nom LIKE :nom ORDER BY nom ASC";
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':nom', "%$nom%");
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
