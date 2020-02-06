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
						<li><a  class="retour" href="../#experience"><span class="glyphicon glyphicon-arrow-left"></span>RETOUR</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-center">
						<li><a href="stage1.php"  style="background-color: #fff; color: #6c9a8b !important">Stage1</a></li>
						<li><a href="stage2.php">Stage2</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<section id="intitule">
			<div class="container-fluid">
				<div class="heading">
					<h1>Stage N°1 : </h1>
					<h2>Lycée Saint michel - Reims</h2>
					<h3>Développeur Web</h3>
					<a href="../docs/penaud_mathieu_rapport_stage_1.pdf" class="button1" target="_blank" style="border: 1px solid white; background-color: rgba(0,0,0,0) !important; color: white !important;">Télécharger</a>
				</div>
			</div>
		</section>

		<section id="text">
			<div class="row">
				<div class="col-lg-12">
					<div class="body">
						
						<div id="accordion">
							<h3>Entretien de présentation du projet</h3>
							<div>
								<p>
									Afin de répondre exactement aux demandes, j'ai créé un diaporama recenssant toutes les informations relatives au projet. <br><br>

									J'ai alors  abordé différentes notions comme les ressources nécessaires à sa réalisaiton, son coût, ses impacts sur le fonctionnement de la société et les éléments nécessaires à son maintien.<br><br>

									J'ai ensuite présenter devant tout mes responsables ce diaporama afin de les rassurer sur la bonne compréhension des demandes. De plus, cet entretien m'a permis d'avoir une description bien plus détaillée de la demande.<br><br>

									<strong>Compétences associés : </strong><br>
									C1.1.1.3 Préparer sa participation à une réunion<br>
									C1.1.2.2 Recenser les composants de l’architecture technique sur lesquels le service à produire aura un impact<br>
									C1.1.3.1 Recenser et caractériser les exigences liées à la qualité attendue du service à produire<br>
									C1.2.1.1 Recenser et caractériser des solutions répondant au cahier des charges (adaptation d’une solution existante ou réalisation d’une nouvelle)<br>
									C1.2.1.2 Estimer le coût d’une solution<br> 
									C1.2.1.3 Rédiger un dossier de choix et un argumentaire technique <br>
									C1.2.2.1 Recenser les composants nécessaires à la réalisation de la solution retenue<br>
									C1.2.3.1 Recenser les risques liés à une mauvaise utilisation ou à une utilisation malveillante du service<br>
									C1.4.3.1 Recenser les ressources humaines, matérielles, logicielles et budgétaires nécessaires à l’exécution du projet et de ses tâches personnelle
								</p>

								<a href="docs/HELPMY.pdf" class="button1" target="_blank">Télécharger</a>
							</div>




							<h3>Définition des niveaux d’habilitation associée au projet</h3>
							<div>
								<p>
									Afin de s'assurer qu'un utilisateur lambda ne peut répondre aux tickets d’assistance ou accèder à un module dont il n'a pas l'autorisation, j’ai mis en place un système de permission dans la base de données avec un booléen. Il y a 4 grades dans celle-ci. Le grade ayant pour valeur "1", est le profil de l'utilisateur.<br><br>


									<img src="images/niveauxHa.png" alt="niveaux Habilitations" height="400" width="700"><br><br>

									<strong>Compétences associés : </strong><br>
									C1.2.5.1 Recenser les utilisateurs du service, leurs rôles et leur niveau de responsabilité 
								</p>
							</div>	


							<h3>Assistance aux personnel de l'organisation<br></h3>
							<div>
								<p>	Suite à la réception d’un ticket incident, ce dernier me faisait part d’un problème de réseau avec un ordinateur élève. <br>Je me suis donc rendu dans la salle afin de voir l’ordinateur en question est je me suis rendu compte que le câble réseau n’est pas bien insérer dans sa prise.<br><br> De plus, j’ai reçu ce jour-même un autre tickets incident me précisant qu’il y avait un problème d’affichage de vidéoprojecteur. J’ai donc simplement vérifié le câble VGA. Cependant l’affichage ne revenait pas. J’ai donc changer le câble et le problème fut résolu.<br><br>

									<strong>Compétences associés : </strong><br>
									C2.2.1.1 Résoudre l’incident en s’appuyant sur une base de connaissances et la documentation associée ou solliciter l’entité compétente<br>
									C2.2.2.1 Identifier le niveau d'assistance souhaité et proposer une réponse adaptée en s’appuyant sur une base de connaissances et sur la documentation associée ou solliciter l’entité compétente 
								</p>
							</div>	




							<h3>Mise en place d'un certificat SSL</h3>
							<div>
								<p>
									Premièrement, j’ai acheté (gratuitement) un certificat SSL sur le site 1&1 puis, j’ai mis en place grâce au .htaccess via le langage de programmation Aapache. En faisant un script demandant une redirection automatique du site vers le site protégé avec HTTPS, cela permet de rassurer les utilisateurs et garantir une meilleure sécurité du site.<br><br>

									<strong>Compétences associés : </strong><br>
									C2.3.1.3 Qualifier le problème (contexte et environnement)<br>
									C4.2.1.2 Repérer les composants à l’origine du dysfonctionnement  
								</p>

								<a href="docs/certificat_SSL.pdf" class="button1" target="_blank">Télécharger</a>
							</div>

							<h3>Création et conception de la plateforme</h3>

							<div>
								<p>Suite au achat des noms de domaine et Certifiacat SSL, j'ai commencé à créer la vitrine du projet. J'ai alors participé à la présentation et réalisaiton de la plateforme d'assistance informatique. <br> <br>

									Les nouveaux tickets devait obligatoirement être relié à la plateforme permettant la mise en place de tests,... De plus, les utilisateurs était donc au courant de la conception d'une nouvelels plateforme d'assistance informatique. 
									<br><br>
								Egalement, mes responsable pouvait suivre l'avancement du projet à distance seulement en saisissant l'URL</p> <br>

								<img src="images/vitrine.jpg" alt="vitrine" height="400" width="700">

								<p>
									<br><br><strong>Compétences associés : </strong><br>
									C1.3.1.2 Tester le service<br>
									C1.3.3.2 Informer et former les utilisateurs<br> 			C1.3.4.3 Mettre en exploitation le service <br>
									C1.4.1.2 Rendre compte de son activité<br>
									C4.1.1.1 Identifier les composants logiciels nécessaires à la conception de la solution <br>
									C4.1.2.1 Définir les spécifications de l’interface utilisateur de la solution applicative
								</div>


								<h3>Création et gestion de la base de données</h3>
								<div>
									<p>
										J’ai procédé à la création de la base de données des comptes afin de mettre en place un système de connexion.
										Pour cela, j'ai suivi je me suis servi du plan du site pour créer cette base de données.

										J'ai alors, utilisé le SGBD Mysql pour avoir un aperçu graphique de la base de données. 
										<br>
									</p>

									<img src="images/plan.png" height="500" width="600">

									<p>
										<br><br><strong>Compétences associés : </strong><br>
										C4.1.3.3 Programmer des éléments de la solution applicative dans le langage d’un SGBD <br>
										C4.1.5.1 Choisir les éléments de la solution à prototyper <br>
										C4.1.7.4 Utiliser des composants d’accès aux données <br>
										C5.2.4.1 Se documenter à propos d‘une technologie, d’un composant, d’un outil ou d’une méthode 
									</p>


								</div>

								<h3>Gestion et utilisation du FTP FileZilla</h3>
								<div>
									<p>
										J’ai relié l’hébergement du FTP sur Filezilla pour créer le site de A à Z et donc ne pas utiliser de CMS.<br>
									</p>

									<img src="images/filezilla.png">

									<p>

										<br><br><strong>Compétences associés : </strong><br>
										C4.1.6.1 Mettre en place et exploiter un environnement de développement 
									</p>


								</div>

								<h3>Réalisation de tests nécessaire à la validation d’éléments adaptés ou développés avec W3C Validator<br></h3>
								<div>
									<p>
										Vérification de la conformité des pages :<br>
										J’ai vérifié à l’aide du site internet W3C, si mes lignes de codes étaient bien conformes aux normes. S’il y avait une erreur, je modifier le code source jusqu’à la résoudre, j’ai effectué ce test sur toutes les pagesjusqu’à ne plus avoir d’erreur.<br>
									</p>

									<img src="images/w3c.png">

									<p>
										<br><br><strong>Compétences associés : </strong><br>
										C4.1.8.1 Élaborer et réaliser des tests unitaire
									</p>


								</div>

								<h3>Rédaction d’une notice d’utilisation</h3>
								<div>
									<p>	Suite à la reception d'un ticket incident, ce dernier concerné une demande d'installation et une fourniture d'informations pour un vidéoprojecteur. J’ai alors installer ce dernier et convoquer la personne afin de lui fournir la documentation et répondre à toutes ses questions.<br><br>

										<br><br><strong>Compétences associés : </strong><br>
										C4.1.10.1 Rédiger la documentation d’utilisation, une aide en ligne, une FAQ 
										

									</p>

									<a href="docs/Notice-Videoproj.pdf" class="button1" target="_blank">Télécharger</a>
								</div>

								<h3>Achat auprès du fournisseur 1&1 et Etablissement de contrat</h3>
								<div>
									<p>
										Afin de mettre en ligne le site HelpMy.fr, nous avons dû procéder à l’achat d’un nom de domaine, d’un certificat SSL, et d’un hébergement.<br>

										À la suite de l’achat passé au fournisseur 1&1, j’ai expliqué au directeur du groupe les futures évolutions des contrats concernant le projet. En effet, la première année, les coûts sont moins important que par la suite.<br>

										<br><br><strong>Compétences associés : </strong><br>
										C5.1.4.2 Interpréter des indicateurs de suivi de la prestation associée à la proposition de contrat<br>
										C5.1.6.2 Caractériser et prévoir les investissements matériels et logiciels <br>
										C1.3.2.3 Décrire les solutions de fonctionnement en mode dégradé et les procédures de reprise du service 
										
									</p>

									<a href="/stage/docs/Achat.pdf" class="button1" target="_blank">Télécharger</a>
								</div>

								<h3>Recherche et compte-rendu sur GLPI</h3>
								<div>
									<p>	Le directeur adjoint, M.GIOT m’a demandé d’effectuer un	compte-rendu sur un logiciel d’assistance tel que GLPI.
										Ce logiciel était un projet que souhaitait mettre en place le lycée afin de gérer les incidents, matériel et réseaux, ainsi que l’inventaire informatique du groupe.

										<br><br><strong>Compétences associés : </strong><br>
										 C5.2.2.4 Synthétiser et diffuser les résultats d'une veille 
									</p>

									<a href="/stage/docs/CR-GLPI.pdf" class="button1" target="_blank">Télécharger</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section id="langage">
					<h1>Langages utilisés :</h1>

					<a target="_blank" href="https://www.w3schools.com/html/">
						<img src="images/htmlLogo.png" width="100px" height="100px" alt="html">
					</a>

					<a  target="_blank" href="https://www.w3schools.com/Css/">
						<img src="images/cssLogo.png" width="100" height="100" alt="css">
					</a>

					<a  target="_blank" href="https://www.w3schools.com/php/">
						<img src="images/phpLogo.png" width="100" height="100" alt="php">
					</a>

					<a  target="_blank" href="https://www.w3schools.com/js/">
						<img src="images/jsLogo.png" width="100" height="100" alt="js">
					</a>


					<a  target="_blank" href="https://www.mysql.com/fr/">
						<img src="images/mysqlLogo.png" width="100" height="100" alt="mySQL">
					</a>

					<a  target="_blank" href="https://apache.org/">
						<img src="images/apacheLogo.png" width="100" height="100" alt="apache">
					</a>
				</section>

				<section id="rencontre">

					<h1>Personne(s) rencontrée(s) :<br></h1>
					<p>M.PERSON (Directeur du groupe)<br>
						M.GIOT (Directeur Adjoint du lycée / collège)<br>
						M.HOFMANN (Informaticien)<br>
						Assistance 1&1 : pour un problème de Mysql<br>
						M.BOUFATIS (Prestataire informatique de la société VEGAS Informatique)<br>
						Mme. MARCHAND (Professeur de Maternelle) ;<br>
						M.FONTAINE (Responsable du service Technique)<br>
					</p>
				</section>





				<footer class="text-center">
					<a href="#up">
						<span class="glyphicon glyphicon-chevron-up"></span>
					</a>

					<h5>© 2019 - mathieu-penaud.fr</h5>
				</footer>
			</body>
			</html>
