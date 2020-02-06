<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>mathieu-penaud.fr</title>

		<meta charset="utf-8">

		<meta name="description" content="Ce site est présente le portefeuille de compétences de Mathieu PENAUD, étudiant en 2ème année de BTS SIO option SLAM à REIMS." />
		<!--Permet de modifier la description dans les recherches de navigateur-->

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

		<script src="JS/script.js"></script>
		<!--Récupération du fichier JS-->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!--on insère les codes sources de bootstrap-->

		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<!--Chemin fichier CSS-->

		<link href='://font.googleapis.com/css?family=Lato' rel="stylesheet" type="text/css">
		<!--Incorporation de la font Lato-->

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
					<ul class="nav navbar-nav">
						<li><a href="#moi">Moi</a></li>
						<li><a href="#formation">Formations</a></li>
						<li><a href="#competences">Compétences</a></li>
						<li><a href='#experience'>Experience</a></li>
						<li><a href="#PPE">Projets Réalisés</a></li>
						<li><a href="#veilleTechnologique">Veille Technologique</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<section id="moi" class="container-fluid">
			<div class="col-xs-8 col-md-4 profile-picture">
				<img src="images/me1.jpg" alt="Moi" class="img-circle" style="border: 8px solid #ccc;">
			</div>
			<div class="heading">
				<h1>Bonjour, moi c'est Mathieu</h1>
				<h3>Développeur Web et Application Métiers</h3>
				<a href="docs/CV-Mathieu_PENAUD.pdf" class="button1" target="_blank">Télécharger CV</a>			
			</div>
		</section>

		<section id="formation">
			<div class="container">
				<div class="blue-divider"></div>
				<div class="heading">
					<h2>formations</h2>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="formation_block">
							<h5>2017 - 2019</h5>
							<span class="glyphicon glyphicon-education"></span>
							<h3>Lycée Franklin ROOSEVELT <br>- Reims - </h3>
							<h4>Brevet de Technicien Supérieur</h4>
							<div class="blue-divider"></div>
							<p>Services Informatiques aux Organisations</p>
							<p>Option : Solutions Logicielles et Application Métiers</p>
							<p>Option : Maths Approfondies</p>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="formation_block">
							<h5>2015-2017</h5>
							<span class="glyphicon glyphicon-education"></span>
							<h3>Lycée Saint Michel<br> - Reims - </h3>
							<h4>Baccalauréat Professionnel</h4>
							<div class="blue-divider"></div>
							<p>Gestion Administation</p>
							<p>22 semaines de PFMP</p>
							<p>Formation en initiale</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		

		<section id="competences">
			<div class="white-divider"></div>
			<div class="heading">
				<h2>Compétences</h2>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
								<h5>HTML 90%</h5>
							</div>
						</div>

						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
								<h5>CSS 90%</h5>
							</div>
						</div>

						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
								<h5>SQL 90%</h5>
							</div>
						</div>

						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
								<h5>PHP 90%</h5>
							</div>
						</div>

						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
								<h5>BOOTSTRAP 80%</h5>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
								<h5>AJAX 80%</h5>
							</div>
						</div>


						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
								<h5>SYMFONY 4 70%</h5>
							</div>
						</div>



						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
								<h5>JAVASCRIPT 60%</h5>
							</div>
						</div>
							
						


						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
								<h5>JAVA 60%</h5>
							</div>
						</div>

						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
								<h5>LUA 20%</h5>
							</div>
						</div>
	
					</div>
					<p class="echelle">* % correspondant au niveau de base du langage</p>
					<p class="echelle">Maîtrise de : </p>
					<p class="echelle"> - Programmation orientée objet (POO)</p>
					<p class="echelle"> - JavaFX</p>
					<p class="echelle"> - Twig</p>
				</div>
			</div>
		</section>

		<section id="experience">
			<div class="container">
				<div class="white-divider"></div>
				<div class="heading">
					<h2>Expérience Professionnelle</h2>
				</div>
				<ul  class="timeline">
					<li>
						<div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
						<div class="timeline-panel-container">
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3>OGEC SAINT MICHEL</h3>
									<h4>Développeur web</h4>
									<p class="text-muted"><small class="glyphicon glyphicon-time"></small> Janvier 2019</p>
								</div>

								<div class="timeline-body">
									<p>Développement de l'interface administrateur, personnel, élève en répondant au cahier des charges</p>
									<p>Mise en place de Bootstrap pour l'adaptation de l'affichage de la plateforme selon le support utilisé</p>
									<p>Ajout de nouvelles fonctionnalités (FAQ)</p>
									<p>Finalisation et présentation finale du projet</p>
									<a class="esp" href="stage/stage2.php">En savoir plus</a>
								</div>

							</div>
						</div>
					</li>

					<li>
						<div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
						<div class="timeline-panel-container-inverted">
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3>OGEC SAINT MICHEL</h3>
									<h4>Développeur web</h4>
									<p class="text-muted"><small class="glyphicon glyphicon-time"></small> Mai 2018</p>
								</div>

								<div class="timeline-body">
									<p>Présentation d'un projet interne d'assistance métiers : <a href="https://helpmy.fr"><span style="font-weight: bold; color: #6c9a8b; ">Helpmy.fr</span></a></p>
									<p>Achat et mise en place des éléments nécessaires au projet<br>
									(Nom de domaine, hébergement, serveur FTP, Certificat SSL)</p>
									<p>Création et gestion de la base de données</p>
									<p>Création et développement des bases de la plateforme</p>	

									<a class="esp" href="stage/stage1.php">En savoir plus</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>


		
		

		<section id="PPE">
			<div class="container">
				<div class="white-divider"></div>
				<div class="heading">
					<h2>Projets Réalisés</h2>
				</div>

				<div style="display: flex; align-items: center; flex-direction: column;">
					<h3>Projet magasin en ligne</h3>
					<div id="CarouselProjet1" class="carousel slide text-center" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#CarouselProjet1" data-slide-to="0" class="active"></li>
							<li data-target="#CarouselProjet1" data-slide-to="1"></li>
							<li data-target="#CarouselProjet1" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="images/accueilE-commerce.png" alt=" accueil e-commerce">
								<h4>Vitrine Site E-commerce ReimsO.</h4>
							</div>

							<div class="item">
								<img src="images/e-commerce.png" alt="e-commerce">
								<h4>Choix des articles et affichage du panier en Ajax</h4>
							</div>

							<div class="item">
								<img src="images/filtres.png" alt="filtres ">
								<h4>Filtres AJax pour rechercher un produit</h4>
							</div>

						</div>
						
						<a class="left carousel-control" href="#CarouselProjet1" data-slide="prev" role="button">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>

						<a class="right carousel-control" href="#CarouselProjet1" data-slide="next" role="button">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
					<a href="projet/magasin/" class="button1" style="height: 50px; width: 300px; text-align: center; margin-left: 20px;">Voir + </a>
				</div>
			</div>
		</section>

		<section id="caisse">	
			<div class="container">
				<div style="display: flex; align-items: center; flex-direction: column;">
					<h3 style="color: white">Projet Caisse Enregistreuse</h3>
						<div id="CarouselProjet2" class="carousel slide text-center" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#CarouselProjet2" data-slide-to="0" class="active"></li>
								<li data-target="#CarouselProjet2" data-slide-to="1"></li>
								<li data-target="#CarouselProjet2" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<img src="images/caisse1.png" alt=" caisse1 ">
									<h4>Vitrine de la caisse enregistreuse</h4>
								</div>

								<div class="item">
									<img src="images/caisse2.png" alt="caisse2">
									<h4>Simulation d'un achat de 2 produits</h4>
								</div>

								<div class="item">
									<img src="images/code.png" alt="code source">
									<h4>Rendu ticket + code source</h4>
								</div>

							</div>
							
							<a class="left carousel-control" href="#CarouselProjet2" data-slide="prev" role="button">
								<span class="glyphicon glyphicon-chevron-left"></span>
							</a>

							<a class="right carousel-control" href="#CarouselProjet2" data-slide="next" role="button">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
						<a href="projets/caisse/" class="button1" style="height: 50px; width: 300px; text-align: center; margin-left: 20px;">Voir + </a>
					</div>
				</div>
			</section>

			<section id="hotel">
				<div class="container">
					<div style="display: flex; align-items: center; flex-direction: column;">
					<h3 style="color: white">Projet Hotel Roosevelt</h3>
					<div id="CarouselProjet3" class="carousel slide text-center" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#CarouselProjet3" data-slide-to="0" class="active"></li>
							<li data-target="#CarouselProjet3" data-slide-to="1"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="images/hotel1.png" alt=" caisse1 ">
								<h4>Vitrine du projet Hotel</h4>
							</div>

							<div class="item">
								<img src="images/hotel2.png" alt="caisse2">
								<h4>Affichage en ajax des disponibilité des chambres pour la date choisie</h4>
							</div>

						</div>
						
						<a class="left carousel-control" href="#CarouselProjet3" data-slide="prev" role="button">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>

						<a class="right carousel-control" href="#CarouselProjet3" data-slide="next" role="button">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
					<a href="projets/hotel/" class="button1" style="height: 50px; width: 300px; text-align: center; margin-left: 20px;">Voir + </a>
				</div>
			</div>
		</section>

		<section id="facture">
			<div class="container">
					<div style="display: flex; align-items: center; flex-direction: column;">
					<h3 style="color: white">Projet Factures PDF</h3>
					<div id="CarouselProjet4" class="carousel slide text-center" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#CarouselProjet4" data-slide-to="0" class="active"></li>
							<li data-target="#CarouselProjet4" data-slide-to="1"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="images/facture1.png" alt=" facture1 ">
								<h4>Vitrine projet de génération des factures</h4>
							</div>

							<div class="item">
								<img src="images/facture2.png" alt="facture2">
								<h4>Affichage de la facture en format PDF avec TCPDF</h4>
							</div>

						</div>
						
						<a class="left carousel-control" href="#CarouselProjet4" data-slide="prev" role="button">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>

						<a class="right carousel-control" href="#CarouselProjet4" data-slide="next" role="button">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				
				<a href="projets/facture/" class="button1"  style="height: 50px; width: 300px; text-align: center; margin-left: 20px;">Voir + </a>
			</div>	
			</div>
		</section>

			<section id="cb">
				<div class="container">
					<div style="display: flex; align-items: center; flex-direction: column;">
					<h3 style="color: white">Projet Générateur CB</h3>
					<div id="CarouselProjet5" class="carousel slide text-center" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#CarouselProjet5" data-slide-to="0" class="active"></li>
							<li data-target="#CarouselProjet5" data-slide-to="1"></li>
							<li data-target="#CarouselProjet5" data-slide-to="2"></li>
							<li data-target="#CarouselProjet5" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="images/cb1.png" alt=" cb1 ">
								<h4>Vitrine du projet Générateur de Code Barres</h4>
							</div>

							<div class="item">
								<img src="images/cb2.png" alt="cb2">
								<h4>Choix des produits à imprimer</h4>
							</div>

							<div class="item">
								<img src="images/cb3.png" alt="cb3">
								<h4>Choix de l'emplacement de départ de l'impression</h4>
							</div>

							<div class="item">
								<img src="images/cb4.png" alt="cb4">
								<h4>Affichage des étiquettes code barres prêt pour impression</h4>
							</div>

						</div>
						
						<a class="left carousel-control" href="#CarouselProjet5" data-slide="prev" role="button">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>

						<a class="right carousel-control" href="#CarouselProjet5" data-slide="next" role="button">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
					<a href="projets/generateurCB/" class="button1"  style="height: 50px; width: 300px; text-align: center; margin-left: 20px;">Voir + </a>
				</div>
				<a href="docs/Tableau_de_synthese_Mathieu_PENAUD.pdf" class="button1" target="_blank">Tableau de synthèse</a>
			</div>
		</section>

		<section id="veilleTechnologique">
			<div class="container">
				<div class="blue-divider"></div>
				<div class="heading">
					<h2>veille Technolgique</h2>
				</div>

				<div class="row">
					<div class="col-sm-4 col-sm-push-2">
						<a class="thumbnail" href="bootstrap/">
							<img src="images/bootstrap.png" alt="Bootstrap">
						</a>
					</div>

					<div class="col-sm-4 col-sm-push-2">
						<a class="thumbnail" href="Wordpress/">
							<img src="images/wordpress.png" alt="Wordpress">
						</a>
					</div>
				</div>

			</div>
		</section>

		<section id="recommandations">
			<div class="container">
				<div class="blue-divider"></div>
				<div class="heading">
					<h2>Recommandations</h2>
				</div>
				<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>

					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<h3>"Mathieu a été très productif, serieux et consciencieux dans son projet. <br>
							Ce dernier sera d'une bonne utilité pour la gestion des litiges informatiques"</h3>
							<h4>Hugues HOFMANN / Informaticien / Lycée Saint Michel - Reims</h4>
						</div>

					</div>
					
					<a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>

					<a class="right carousel-control" href="#myCarousel" data-slide="next" role="button">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</section>

		

		<footer class="text-center">
			<a href="#moi">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>

			<h5>© 2019 - mathieu-penaud.fr</h5>
		</footer>
</body>
</html>
