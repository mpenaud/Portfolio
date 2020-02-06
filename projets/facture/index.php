<!DOCTYPE html>
<html lang="fr">
<head>
	<title>mathieu-penaud.fr - Stage 2 </title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Permet d'appliquer le mode responsive en fonciton de la taille du device + zoom : standard-->


		<!--Information de responsive BOOTSRTAP : 
			Devices   | nom taille device | nb pixels  | taille Container
			
			Phones    | XS (xtra small)   | <  768px   | All
			Tablettes | sm (Small)        | >= 768px   | 750px
			Desktop(p)| md (Medium)       | >= 992px   | 970px
			Desktop(l)| lg (Large)        | >= 1200px  | 1170px
		-->


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!--Appel de jquery-->

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!--Utilisation du CDN de Bootstrap-->


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!--on insère les codes sources de bootstrap-->

		<link rel="stylesheet" type="text/css" href="style1.css">
		<!--Chemin fichier CSS-->


		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		<link href='://font.googleapis.com/css?family=Lato' rel="stylesheet" type="text/css">
		<!--Incorporation de la font Lato-->

		<script>
			$( function() {
				$( "#accordion" ).accordion();
			} );
		</script>
	</head>

	<body data-spy="scroll" data-target=".navbar" data-offset="60">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-left">
						<li><a  class="retour" href="../../#PPE"><span class="glyphicon glyphicon-arrow-left"></span>RETOUR</a></li>
					</ul>

				</div>
			</div>
		</nav>

		<section id="intitule">
			<div class="container-fluid">
				<div class="heading">
					<h1>Projet Facture PDF </h1>
					<h2>avec PHP et Ajax</h2>
					<h3>Réalisé en équipe de 2</h3>
				</div>
			</div>
		</section>

		<section id="text">
			<div class="row">
				<div class="col-lg-12">
					<div class="body">
						<section id="contenu">
							<h2>contexte du projet : </h2>
							<p>Il s'agit de créer une plateforme recenssant toutes les commandes précédemment passées par des clients, et de pouvoir les afficher en PDF grâce à la bibliothèque TCPDF. <br> Il sera également possible de filtrer les commandes afin de faciliter leur recherches
							</p>

							<br><br>
							<br><br>
							<br><br>

							<h2>Réalisation du projet : </h2>
							<p>Ce projet fonctionne avec les langages de programmation PHP et AJAX ainsi qu'à l'aide de la bibliothèque TCPDF qui permet de créer un fichier en format PDF et de l'afficher à l'écran.<br>

							Afin de réaliser ce projet, nous devons dans un premier temps lier la base de données à la plateforme. Ensuite, nous avons créé la page de base recenssant toutes les factures :  </p><br><br>

							
							

							<img src="images/facture1.png" alt=" facture2" width="1400" height="800" style="margin: 0 auto"><br><br>

							<p>Une fois la page d'accueil créée, il suffisait de lier la valeur envoyé par le bouton "PDF" de chaque ligne pour retrouver les informations concernant la commande dans la base de données. <br> Ensuite, grâce à la bibliothèque TCPDF, nous créons un fichier PDF et y créons la facture avec les données précédemment envoyées. </p><br><br>


							<img src="images/facture2.png" alt=" facture2" width="1400" height="800" style="margin: 0 auto"><br><br>						

						</section>

						<section id="rencontre">

							<h1>Résultat<br></h1>
							<h4 style="text-align: center;">Nous avons obtenu l'application  conforme aux attentes. <br> Ce projet m'a permit d'affronfondir mes connaissances PDF et Ajax.
							</h4>
						</section>





						<footer class="text-center">
							<a href="#up">
								<span class="glyphicon glyphicon-chevron-up"></span>
							</a>

							<h5>© 2019 - mathieu-penaud.fr</h5>
						</footer>
					</body>
					</html>
