<!DOCTYPE html>
<html>
<head>
	<title>Gestion des patients</title>
	<link rel="stylesheet" href="style.css">
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    
    header {
        background-color: #333;
        color: #fff;
        padding: 20px;
    }
    
    nav {
        background-color: #f2f2f2;
        border-bottom: 1px solid #ccc;
        padding: 10px;
    }
    
    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    
    nav ul li {
        display: inline-block;
        margin-right: 20px;
    }
    
    nav ul li a {
        color: #333;
        text-decoration: none;
    }
    
    nav ul li a:hover {
        color: #fff;
        background-color: #333;
    }
    
    main {
        padding: 20px;
    }
    
    footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
    }
    </style>
</head>
<body>
	<header>
		<h1>Gestion des patients</h1>
	</header>
	<nav>
		<ul>
			<li><a href="Accueil.php">Accueil</a></li>
			<li><a href="registration.php">Nouveau patient</a></li>
            <!-- <li><a href="user-login">Connexion patient</a></li> -->
			<li><a href="#">Liste des patients</a></li>
			<li><a href="recherche_patient.php">Recherche de patient</a></li>
		</ul>
	</nav>
	<main>
		<h2>Bienvenue sur la plateforme de gestion des patients </h2>
		<p>Vous pouvez utiliser le menu de navigation ci-dessus pour naviguer sur la plateforme.</p>
	</main>
	<footer>
		<p>&copy; 2023 gestion des patients</p>
	</footer>
</body>
</html>
