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
					<h1>Projet E-commerce </h1>
					<h2>avec Symfony4</h2>
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
							<p>M. LEDUC, directeur de Reims Outillage, veut conquérir de nouvelles parts de marché.  Il a donc décidé de lancer son entreprise sur Internet. C’est pourquoi, il vous demande de créer un site web qui permet aux internautes de passer des commandes d’achat des produits du magasin.<br><br>
								Pour que cela soit possible, les clients doivent d’abord créer un compte client. Pour créer un compte, il faut renseigner un nom, un prénom, au moins une adresse, un numéro de téléphone, un nom pour le compte (login) et un mot de passe. Les adresses, le numéro de téléphone, le mot de passe sont des informations qui peuvent être modifiées ultérieurement.<br><br>
								Une fois ce compte créé, ils peuvent se connecter à ce compte en fournissant leurs login et mot de passe pour passer une commande. Pour ce faire, ils peuvent choisir les articles qui les intéressent en choisissant les quantités voulues. Les produits sont affichés par catégorie avec une photo.<br><br>
								Pour trouver des produits, il faut une fonction de recherche qui permet de trouver les articles en fonction d’une fourchette de prix, d’une catégorie, du libellé.<br><br>
								Un client ne peut gérer qu’une commande à la fois. Une fois une commande validée, elle ne peut plus être annulée ni modifiée. De plus, un client à la possibilité de consulter ces commandes passées en visualisant le détail.<br><br>
								M. LEDUC vous demande de ne réaliser, pour la première version du site, que la partie vue par le client ; la partie vue par les vendeurs sera l’objet d’une deuxième version si la première version donne satisfaction.<br><br>
								Fabien PETIT, directeur technique, vous rappelle que le site doit être développé en PHP. Il vous propose de profiter de ce projet pour utiliser le framework Symfony. La base de données doit être Postgresql.
							</p>

							<br><br>
							<br><br>
							<br><br>

							<h2>Réalisation du projet : </h2>
							<p>Ce projet fonctionne via la méthode MVC (Model View Controller). Cette méthode signifie que le traitement de la page et sont affichage sont gérer dans 2 fichiers totalement différents. <br> Afin de réaliser le projet, il a été nécessaire de se documenter sur les langages qui le compose ainsi que sur les logiciel / Applications qu'il nécessite.<br>

								Je me suis alors rendu sur la plateforme de <a href="https://symfony.com/">Symfony</a> pour y apprendre son fonctionnement. Une fois la documentation effectué, j'ai effectué une "réunion" avec mon collègue afin d'assembler nos connaissances.<br>

								Ce projet nécessite donc d'utiliser le logiciel "Composer", ce dernier sert à gérer le projet (création, ajout de controlelr, etc...). Il nécéssite une bases de données et demande des connaissance en POO, Twig, Rawl pour sa réalisation. 

							Nous avons alors créé la base de données, ainsi qu'un jeux d'essai pour les produits qui seront à vendre.</p>

							
							<img src="images/scriptsql.png" width="400" height="400">

							<img src="images/je.png" width="600" height="400" style="margin-left: 20px; margin-top: 20px; margin-bottom: 20px;"><br>

							<p>Une fois ce le SQL réalisé, nous avons créé le projet avec composer, puis nous nous y sommes connecter avec le code <strong>"server:run"</strong>

								<br>Lorsque le squelette du site fut créé, nous pouvons commencer la réalisation. La première étape était la création de compte. Pour cela nous avons créé un controller pour la page de conneciton. Ce controller nous permet, par le biais d'un modal, de créer un compte ou de se connecter directement.

								<br><br>
							Lorsqu'un utilisateur saisis des informations, celles-ci sont envoyé à la base de données pour les analysé et lui affiché le bon profil si elles coordonnent bien. une fois l'utilsateur connecter, il arrive sur la page pricipale du site:    </p><br><br>


							<img src="images/accueilE-commerce.png" alt=" accueil e-commerce" width="1400" height="800" style="margin: 0 auto">

							<p>Depuis cette page, l'utilsateur peut consulter ses informations en cliquant sur l'engrenage. Il peut également passer des commandes en ajoutant au panier l'un des articles suivants : (c'est articles peuvent être trouvé par le biais de filtres)</p><br><br>

							<img src="images/filtres.png" alt="filtres "width="1400" height="800" style="margin: 0 auto"><br>

							<br><br>

							<p>une fois la commande passée, il peut l'afficher, supprimmer des article ou la valider. Si elle est validée, celle-ci sera ajouter à ses commandes. Il faudra alors accèder à l'onglet "mes commandes" pour les visualiser</p><br><br>


							<img src="images/e-commerce.png" alt="e-commerce" width="1400" height="800" style="margin: 0 auto"><br>
							
						</section>

						<section id="rencontre">

							<h1>Résultat<br></h1>
							<h4 style="text-align: center;">Nous avons obtenu l'application principalement conforme aux attentes et avons obtenu la note <strong>17 / 20 </strong><br> en raison de quelques maladresse ou oublies dans la réalisation du projet (format francais, possibilité chagement adresse,... )
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
