
<!DOCTYPE HTML>
<head>
	<meta charset="utf-8">
		<title>Page d'accueil</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/styles.css">
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="css/themes/theme-1.css" id="skin_color" />
        

		  <script>
			    $(function () {

			      $("#slider1").responsiveSlides({
			        maxwidth: 2000,
			        speed: 600,
			      });
			    });
		    </script>
</head>
<body>
<header>
      <div class="top-nav">
        <ul>
          <li><a href="index.php">Deconnexion</a></li>
        </ul>
      </div>
</header>
	           <div class="image-slider">
			   <ul class="rslides" id="slider1">
					      <img src="c.JPG" alt style ="
						  background-size: center center; 
						  width: 100%;
						  height: 100%;">	   
				</div>

			<form action="gestion_patient.php" >
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="4.PNG">
					</div>
					<div class="text list_1_of_2">
						  <h3>Gestion des patients</h3>
						 
						  <div class="button"><span><a href="gestion_patient">Cliquez ici</a></span></div>
				    </div>
				</div>
		    </form>
			
			<form action="Consultation.php" >
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="8.PNG">
					</div>
					<div class="text list_1_of_2">
						  <h3>Consultaion</h3>
						 
						  <div class="button"><span><a href="CONSULTATION">Cliquez ici</a></span></div>
				    </div>
				</div>
		    </form>

			<form action="Fiche de rendez vous.php">
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="B.PNG"> 
					</div>
					<div class="text list_1_of_2">
						  <h3>Fiche Des rendez</h3>
						  <div class="button"><span><a href=" Fiche de rendez vous">Cliquez ici</a></span></div>
				    </div>
				</div>
			</form>	
	
</body>
</HTML>
