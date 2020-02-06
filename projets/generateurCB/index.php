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
					<h1>Projet Générateur Codes Barres </h1>
					<h2>avec PHP & TCPDF </h2>
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
							<p>Jusqu'à présent le magasin propose à la vente ses produits uniquement sur Internet. <br>
							Le site est un succès et pour développer l'activité de l'entreprise, il a été décidé  d'ouvrir une boutique qui proposera à la vente en direct tous les produits vendus sur Internet.<br>
							Dans cette boutique, les clients déambuleront librement dans les rayons, pourront demander de l'aide auprès de conseillers et passeront en caisse pour payer leurs articles.<br>
							Pour faciliter le passage en caisse il faut coller sur chaque produit une étiquette codebarres représentant l'identifiant du produit. Ce code barre sera lu au moment du passage en caisse à l'aide d'un lecteur de codes barres.<br>
							Vous devez travaillez seul pour ce projet qui fera l'objet d'une évaluation.<br>
							
							<br><br>
							Dans un premier temps, vous devez rechercher et tester une bibliothèque PHP qui permet de générer des codes-barres.
							<br>	
							Dans un deuxième temps, vous devez trouvez un fournisseur qui propose des étiquettes auto-collantes sur format A4.
							<br>	
								Ensuite, vous devez écrire une application web qui permet d'imprimer des étiquettes code-barres  à partir d'une sélection de produits réalisée par l'utilisateur.
							<br><br>
								L'utilisation des pages d'étiquettes doit être optimisée pour éviter le gaspillage. Par exemple, si 19 étiquettes sont imprimées et qu'une page contient 15 étiquettes vierges (5 lignes de 3 colonnes) 2 pages seront imprimées. La première page contiendra 15 étiquettes imprimées et la seconde page contiendra 4 étiquettes imprimées et 11 étiquettes restées vierges. Cette seconde page doit être réutilisée.
								Il faut donc qu'à la prochaine impression il soit possible de préciser l'emplacement de la première étiquette à imprimer.
							</p>

							<br><br>
							<br><br>
							<br><br>

							<h2>Réalisation du projet : </h2>
							<p>Ce projet fonctionne via les langages WEB (HMLT,CSS,PHP et SQL). J'ai dans un premier temps lié le projet à une base de données précédemment créée grâce à un code fournis par mon professeur. <br><br>

							Ensuite, j'ai créé une première page permettant le lancement de la procédure d'impression d'étiquette code barre.</p>

							
							<img src="images/cb1.png" alt=" accueil e-commerce" width="1400" height="800" style="margin: 0 auto">

							<p>Une fois cette page créée, j'ai conçu une seconde page. Celle-ci recense tout les produits vendu par la société. L'utilisateur choisit la quantité qu'il souhaite de chaque pour chaque produit et envoie le formulaire grâce à bouton situé en bas de la page "confirmer la selection".
							</p><br><br>


							<img src="images/cb2.png" alt=" accueil e-commerce" width="1400" height="800" style="margin: 0 auto">

							<p>Ensuite, l'utilisateur doit choisir un emplacement pour le début de son impression. cela permet d'économiser du papier. Sans indication de sa part, l'impression commencera en haut à gauche de la page.</p><br><br>

							<img src="images/cb3.png" alt="filtres "width="1400" height="800" style="margin: 0 auto"><br>

							<br><br>

							<p>Lorsque la page précedente fut elle aussi envoyé, la bibliothèque TCPDF intervient et à l'aide de variables de session précedemment créées. Cette bibliothèque affiche un document PDF recenssant toutes les demandes de l'utilisateur (quantité / produit et emplacement de départ).<br>

							Cette page permet à l'utilisateur de vérifier que l'impression qu'il s'apprete à lancer épond bien à ses attentes.<br><br>

							Si tel est le cas, il peut alors pousuivre la procédure en imprimant le document PDF.
							</p><br><br>


							<img src="images/cb4.png" alt="e-commerce" width="1400" height="800" style="margin: 0 auto"><br>
							

						</section>

						<section id="rencontre">

							<h1>Résultat<br></h1>
							<h4 style="text-align: center;">j'ai obtenu l'application conforme aux attentes . <br> De plus, cela m'a permis de reforcer mes connaissances de la bibliothèque TCPDF.
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
