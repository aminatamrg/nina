<!DOCTYPE HTML>
<head>
	<title>Ordonance</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/themes/theme-1.css" id="skin_color" />
    <STyle>
	    form input [type='submit'] {
            background-color: rgb(143, 143, 24);
            color: black;
            border: 0;
            margin-top: 20px;
            padding: 6px 0;
		}
		body {          
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: rgb(143, 143, 24);;
        }
		form input [type='radio']{
            margin: 5px 0;
            padding: 5px 5px;
            outline: 0;
            border: 2PX solid;
            border-radius: 6PX;
        }
		fieldset {
			background-color:rgb(24, 82, 143);	
		}
		section {
            background-color: rgb(24, 82, 143);
            padding: 10px;
            display: flex;
            flex-direction: column;
            width: 1500px;
            border-radius: 4px;
        }
		.top-nav{
			display: inline-block;
            height: 50px;
			font-size: 17px;
            padding-left: 15px;
            padding-right: 15px;
            color: #c8c7cc;
		}

		
	</STyle>

		<script>
		function checkAll(source) {
			var checkboxes = document.querySelectorAll('input[type="checkbox"]');
			for(var i=0; i<checkboxes.length; i++) {
				if(checkboxes[i] != source) {
					checkboxes[i].checked = source.checked;
				}
			}
		}
	</script>
</head>
<body> 

		   <div class="top-nav">
					<ul>
						<li class="active"><a href="Accueil.php">Home</a></li>
						<li><a href="#">Imprimer</a></li>
					</ul>
					<div class="clear"> </div>
			</div>	
        
		<head><h1><center><strong>Fiche de Consultation</strong></center></h1></head>
		<section>
			<big>
			   <label><input type="checkbox" onclick="checkAll(this)"> Tout selectionnée</label><br>
	           <label><input type="checkbox"> Alergie</label><br>
	           <label><input type="checkbox"> Maux de tête</label><br>
	           <label><input type="checkbox"> Rhume</label><br>
			   <label><input type="checkbox"> Manque de someil</label><br>
	           <label><input type="checkbox"> Diarrhée</label><br>
			   <label><input type="checkbox"> Maux de ventre</label><br>
			   <label><input type="checkbox"> Raido</label><br>
	           <label><input type="checkbox"> Diarrhée</label><br>
			   <label><input type="checkbox"> analyse sangun</label><br>  	          
			</big> 
	    
		<div align="left">
			<u><p><big>Vous souffrez de </p></u><big></label>
		    <textarea cols="60" rows="10"> </textarea>
		</div>
		</section>		
				 <h1><center><strong>Ordonance</strong></center></h1>
				<form   method="post">
				    <fieldset>
						<tr>
							
						    <u><p><label><big>Docteur Aminata Issagha Marega </p>
							<p>Medecine généraliste</p>
						    </big></LABEL>

							<div align="right">
								<p><label><big>Zak Mbao</p>
								<p>Rue brioche Dorée<p>
								<p>Tel cabinet: 09 08 07 05<p>
								<p>Tel urgence: 03 01 34 53<p>
								<p>16/07/2023<p></u>
								
								<big></label>
		                    </div>
						</tr>

						   <div>
						   <textarea cols="150" rows="20"> </textarea>
						   </div>

							<div align="right">
							   <u><p><big>signature</p></u><big></label>
		                    </div>
				    </fieldset>	
				</FORm>	
	
</body>
</HTML>
