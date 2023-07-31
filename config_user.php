<!DOCTYPE html>
<html>
  <head>
    <title>Fiche de rendez-vous</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/themes/theme-1.css" id="skin_color" />
    <link rel="stylesheet" href="style_1"> 
    <link rel="stylesheet" href="style_a"> 

    <style>
      /* Styles pour la page */
      body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 50vh;
        background-color: aquamarine;
      }
      /* Styles pour le formulaire */
      form {
        background-color: aqua;
        padding: 70px;
        margin: 80PX;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      form label {
        display: block;
        margin-bottom: 10px;
      }
      form input[type="text"],
      form input[type="date"],
      form select,
      form textarea {
        width: 100%;
        padding: 8px;
        border-radius: 10px;
        border: none;
        margin-bottom: 20px;
      }
      form textarea {
        height: 150px;
      }
      /* Styles pour les boutons */
      button {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>

      <form action="config_rv.php" method="POST">
      <h1>Fiche de rendez-vous médical</h1>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" placeholder="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" placeholder="prenom" required>

        <label for="date">Date :</label>
        <input type="date"  name="daate" required>

        <label for="heure">Heure :</label>
        <select id="heure" name="heure" required>
          <option value="">-- Choisissez une heure --</option>
          <option value="08h00">08:00:00:</option>
          <option value="09h00">09:00:00</option>
          <option value="10h00">10:00:00</option>
          <option value="11h00">11:00:00</option>
          <option value="14h00">14:00:00</option>
          <option value="15h00">15:00:00</option>
          <option value="16h00">16:00:00</option>
          <option value="17h00">17:00:00</option>
        </select>

        <label for="motif">Motif :</label>
        <textarea id="motif" name="motif" required></textarea>

        <input type="submit" name="submit" value="Enregistrer">
      </form>
    </div>
  </body>
</html>
