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
					<h1>Projet Hotel Roosevelt </h1>
					<h2>avec PHP et Ajax</h2>
					<h3>A Réaliser en autonomie</h3>
				</div>
			</div>
		</section>

		<section id="text">
			<div class="row">
				<div class="col-lg-12">
					<div class="body">
						<section id="contenu">
							<h2>contexte du projet : </h2>
							<p>L’hôtel Roosevelt propose des chambres à ses clients. Vous pouvez voir l’agencement de l’hôtel dans le fchier hotel_roosevelt.dia.<br><br>
							Le directeur de l’hôtel souhaite disposer d’une application web qui permettra aux réceptionnistes de gérer la location des chambres.<br>
							Les chambres ont trois tailles : chambre normale, grande chambre et suite.<br><br>
							 L’application doit permettre aux réceptionnistes d’enregistrer et de connaître les locations de l’hôtel à une date donnée. <br>Mais, afn de satisfaire au mieux les clients, ils doivent être en mesure de les renseigner précisément et rapidement sur la nature des chambres : taille de la chambre, étage, vue sur les châtaigniers, vue sur la piscine, vue sur le parc, exposition à la rue (problème de bruits), etc.<br><br>

							 Il serait donc souhaitable de visualiser les chambres sous la forme d’un plan qui contiendra les diférents éléments de l’hôtel. Les chambres louées pourront être représentée en rouge et les chambres libres en vert. Il ne s’agit pas de rentrer dans la base de données les caractéristiques de chaque chambre (comme la vue sur les châtaigniers ou l’exposition à la rue), mais de placer le plan de l’hôtel dans la page web afn que le réceptionniste puisse déduire les informations directement en visualisant le plan.
								Remarque : pour simplifer l’application, on considère qu’une location concerne un client, une journée et une chambre.

							</p>

							<br><br>
							<br><br>
							<br><br>

							<h2>Réalisation du projet : </h2>
							<p>Ce projet fonctionne grâce aux langages PHP et AJAX. La pricipale caractèristiques de ce projet est l'utilisation de l'outil "CANVAS" de javascript. En effet, il est demandé de créer un plan graphique de l'hôtel. Il s'agit alors de la meilleure methode pour réaliser ce plan. <br>

							J'ai alors commencé par liée la base de données au projet. Ensuite, j'ai créé la page d'accueil. Celle-ci demande la type de chambre et le jour que l'on recherche : </p><br><br>

							
							<img src="images/hotel1.png" alt=" accueil e-commerce" width="1400" height="800" style="margin: 0 auto"><br><br>

							

							<p>Une fois la recherche effectuée, l'applicaiotn retourne le plan de l'hôtel avec les chambre que l'on peut filtrer par étaage avec une requête ajax. Cependant, je n'ai pas réussi à faire la laison entre la recherche et la base de données.</strong><br><br>


							<img src="images/hotel2.png" alt=" accueil e-commerce" width="1400" height="800" style="margin: 0 auto"><br><br>							

						</section>

						<section id="rencontre">

							<h1>Résultat<br></h1>
							<h4 style="text-align: center;">J'ai obtenu un projet non fini, en raison de non connaissance et d'une mauvaise compréhension d'un module. <br>Cependant, je me suis renseigné sur ce dernier et je le maîtrise beaucoup mieux aujourd'hui.
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
