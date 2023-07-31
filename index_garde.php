
<!DOCTYPE HTML>
<html>
	<head>
		<title>Hospital Management System</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  
		  <script>
			    $(function () {

			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	</head>


	<body>
		
			<div class="header">
				<div class="logo">
					<a href="index.html" style="font-size: 30px;">Hospital Management system</a>
				</div>
			
				<div class="top-nav">
					<ul>
						

						<li><a href="contact.php">contact</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
				
			</div>
			
		<div class="clear"> </div>
			
				<div class="image-slider">
					    <ul class="rslides" id="slider1">
					      <li><img src="image/1.jpg" alt=""></li>
					      <li><img src="image/2.jpg" alt=""></li>
					      <li><img src="image/3.jpg" alt=""></li>
						  <li><img src="image/4.jpg" alt=""></li>
					    </ul>
				</div>
	


				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="image/grid-img3.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>connexion Patients</h3>
						  <div class="button"><span><a href="patient/user-login.php">CLIQUER ICI</a></span></div>
				    </div>
				</div>

				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="image/grid-img1.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>CONNEXION Docteur</h3>

						  <div class="button"><span><a href="doctor/page_Authentification.php">CLIQUER ICI</a></span></div>
					</div>
				</div>

			</div>
	</body>
</html>
