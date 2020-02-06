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
						<li><a href="stage1.php">Stage1</a></li>
						<li><a href="stage2.php"   style="background-color: #fff; color: #6c9a8b !important">Stage2</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<section id="intitule">
			<div class="container-fluid">
				<div class="heading">
					<h1>Stage N°2 : </h1>
					<h2>Lycée Saint michel - Reims</h2>
					<h3>Développeur Web</h3>
					<a href="../docs/penaud_mathieu_rapport_stage_2.pdf" class="button1" target="_blank" style="border: 1px solid white; background-color: rgba(0,0,0,0) !important; color: white !important;">Télécharger</a>
				</div>
			</div>
		</section>

		<section>
			<div class="row">
				<div class="col-lg-12">
					<div class="body">
						
						<div id="accordion">
							<h3>Mis à jour du cahier des charges</h3>
							<div>
								<p>
									Afin de m’assurer de la conformité de la conception du site avec les attentes de mes supérieurs, j’ai eu un long entretien avec l’informaticien.  Durant cet entretien, j’ai présenté les options déjà réalisées et mes idées. L’informaticien m'a demandé quelques fois de faire des retouches, et m’a proposé des idées pour la suite en terme de design ou d’options, afin que la plateforme lui corresponde parfaitement. <br><br>

									Nous avons alors écrit toute ces idées sur feuille au brouillon afin de s’assurer qu’on exprimait la même chose. Cet entretien m’a alors permis de connaître les attentes de mes supérieurs, de valider mon travail précédemment réalisé et donc,  de limiter la perte de temps.<br><br>

									J’ai alors retranscris toutes les étapes restantes sur le tableau que j’ai à mis disposition afin d’avoir un suivi de l’avancement du projet. 
								</p>

								<img src="images/cdc.png" width="1000" height="600"><br><br>

								<strong>Compétences associés : </strong><br>
								C1.1.1.4: Rédiger un compte-rendu d’entretien, de réunion  
							
						</div>

						<h3>Entretien avec les supérieurs et modifications de l'objectif du projet </h3>
						<div>
							<p>
								Afin de répondre exactement aux nouvelles demandes, j'ai modifié le diaporama recenssant toutes les informations relatives au projet. <br><br>

								J'ai alors  abordé différentes notions comme les ressources nécessaires à sa réalisaiton, son coût, ses impacts sur le fonctionnement de la société et les éléments nécessaires à son maintien et son objectif.<br><br>

								J'ai ensuite présenter devant tout mes responsables ce diaporama afin de les rassurer sur la bonne compréhension des demandes. De plus, cet entretien m'a permis d'avoir une description bien plus détaillée de la demande.<br><br>

								<strong>Compétences associés : </strong><br>
								C1.1.2.2 Recenser les composants de l’architecture technique sur lesquels le service à produire aura un impact
								A1.1.3 , Étude des exigences liées à la qualité attendue d'un C1.1.3.1 Recenser et caractériser les exigences liées à la qualité attendue du service à produire<br>
								C1.2.1.1 Recenser et caractériser des solutions répondant au cahier des charges (adaptation d’une solution existante ou réalisation d’une nouvelle)<br>
								C1.2.1.2 Estimer le coût d’une solution<br> 
								C1.2.1.3 Rédiger un dossier de choix et un argumentaire technique <br>
								C1.2.2.1 Recenser les composants nécessaires à la réalisation de la solution retenue<br>
								C1.2.3.1 Recenser les risques liés à une mauvaise utilisation ou à une utilisation malveillante du service<br>
								C1.3.2.3 Décrire les solutions de fonctionnement en mode dégradé et les procédures de reprise du service 
								C1.4.2.1 Suivre l’exécution du projet
								C1.4.3.1 Recenser les ressources humaines, matérielles, logicielles et budgétaires nécessaires à l’exécution du projet et de ses tâches personnelles 
							</p>

							<a href="docs/HELPMY.pdf" class="button1" target="_blank">Télécharger</a>	
						
					</div>

					<h3>Définition des niveaux d’habilitation associée au projet</h3>
					<div>
						<p>
						Afin de s'assurer qu'un utilisateur lambda ne peut répondre aux tickets d’assistance ou accèder à un module dont il n'a pas l'autorisation, j’ai mis en place un système de permission dans la base de données avec un integer. Il y a 4 grades dans celle-ci. La valeur de ce dernier défini le grade de l'utilisateur<br><br>


						<img src="images/niveauxHa.png" alt="niveaux Habilitations" height="400" width="700"><br><br>

						<strong>Compétences associés : </strong><br>
						C1.2.5.1 Recenser les utilisateurs du service, leurs rôles et leur niveau de responsabilité 
					</p>
				</div>


				<h3> Développement de la plateforme Helpmy.fr</h3>
				<div>
					<p>
						Afin de poursuivre la réalisation de la plateforme d'assistance informatique, j'ai utilisé le cahier des charges, et le tableau recenssant les misisons restantes afin de m'organiser dans la procédure de réalisation.<br>

						J'effectue donc de nombreux tests selon la page en cours de réalisation afin d'être persuadé qu'aucune faille y est présente.<br><br>

						De plus, j'ai modifié l’interface concernant l’administrateur et le personnel afin de savoir si le code était bien correct. Il fallait que je fasse attention aux différents droits que j’attribuais au statut pour être sûr qu’une personne du personnel ne puisse pas réaliser des  tâches qui ne lui sont pas autorisées. 

						De ce fait, je définis le statut sur une échelle de 1 à 4 :

						1- élève , 2 – personnel , 4 – Administrateur ;

						De plus, il fallait que je change les onglets selon le statut. En effet, l’administrateur peut gérer tous les comptes, les tickets tandis qu’une personne du personnel ne pourra gérer que ses propres tickets. 
					</p>
					<img src="images/admin.png" width="700" height="500">


					<p>
						<br><br><strong>Compétences associés : </strong><br>
						C2.1.2.1 Analyser les indicateurs de qualité du service<br> 
						C1.3.4.3 Mettre en exploitation le service <br>
						C1.4.1.1 Établir son planning personnel en fonction des exigences et du déroulement du projet <br>
						C1.2.4.1 Recenser les tests d’acceptation nécessaires à la validation du service et les résultats attendus <br>
						C1.3.1.2 Tester le service <br>
						C4.1.1.1 Identifier les composants logiciels nécessaires à la conception de la solution<br>
						C4.1.1.2 Estimer les éléments de coût et le délai de mise en œuvre de la solution 
						C4.1.2.1 Définir les spécifications de l’interface utilisateur de la solution applicative<br>
						C4.1.6.1 Mettre en place et exploiter un environnement de développement 
					</p>
				</div>


				<h3>Assistance de l'utilsateur et création de module FAQ</h3>
				<div>
					<p>
						Afin de permettre aux utilisateurs personnel comme élève d’avoir une réponse rapide à leur problème, et d'être assisté lors de leur navigation sur la plateforme, j’ai proposé et créé un système de FAQ. Ce système recense les questions les plus fréquemment posées. De ce fait, l’utilisateur n’a pas besoin d’émettre un ticket incident et d’autre part, cela réduit les interventions de l’informaticien pour des choses minimes, lui permettant ainsi de se concentrer sur les problèmes plus urgents.<br><br> 
					</p>

					<img src="images/faq.png">


					<p>	
						De plus, afin de pouvoir connaître exactement l’avancement de la résolution d’un ticket, j’ai mis en place une nouvelle table permettant de réaliser cela. De ce fait, par la modale des tickets, nous pouvons changer l’état du ticket. Cet état sera présent dans le tableau recensant tous les tickets.

						<br><br>
						<strong>Changement d'etat : </strong>
					</p>


					<img src="images/etat1.png"><br><br>
					<img src="images/etat2.png">


					<p>
						<br><br><strong>Compétences associés : </strong><br>
						C2.1.1.1 Aider les utilisateurs dans l’appropriation du nouveau service<br> 
						C2.2.1.1 Résoudre l’incident en s’appuyant sur une base de connaissances et la documentation associée ou solliciter l’entité compétente<br>
						C2.2.2.2 Informer l'utilisateur de la situation de sa demande <br>
						C1.3.3.2 Informer et former les utilisateurs <br>
						C2.3.2.1 Décrire les incidences d’un changement proposé sur le service<br>
					</p>
				</div>

				<h3>Gestion des dysfonctionnements</h3>
				<div>
					<p>
						En souhaitant me connecter à mon hébergeur web ce jour, impossible d’y accéder. L’erreur me retourne une mauvaise saisie de mot de passe et/ou identifiant. Or, je connaissais par cœur ces derniers. 

						Solution(s) trouvée(s) : 
						J’ai alors directement contacté mon conseilller personnel 1&1 Ionos afin d’obtenir des informations sur le litige. Après m’être présenté et après avoir prouvé que j’étais bien une personne travaillant sur ce domaine, mon conseiller m’a affirmé qu’il y avait bien eu un changement de mot de passe quelques minutes avant mon arrivée, mais qu’il ne savait guère la provenance. Je lui ais alors demandé s’il s’agissait d’un changement de carte bleue, car le payant du domaine avait une carte valable jusqu’en 02/19. Le conseiller m’a alors confirmé cette manipulation. 

						Je suis alors allé voir le payeur afin d’obtenir le nouveau mot de passe d’accès à l’hébergeur. Celui-ci m’a demandé de me représenter l’après-midi.  J’ai alors dû réaliser des actions ne nécessitant pas le traitement de données.  Une fois l’heure proche, je suis retourné voir le payeur et celui-ci m’a redonné les nouveaux identifiants de connexion.

						<br><br><strong>Compétences associés : </strong><br>
						C4.2.1.2 Repérer les composants à l’origine du dysfonctionnement <br>C2.3.1.2 Identifier les causes de ce dysfonctionnement 
					</p>
				</div>



				<h3>Conception ou adaptation d'une base de données</h3>
				<div>
					<p>
						Construction MCD
						Afin de mettre en place la base de données, j’ai mis en place le MCD qui recense toutes les données qui seront collectées et les liens qui les unissent. Ce schéma fut réalisé sur le logiciel DIA. Il me permet d’avoir une idée de la future structure de la base de données. (image ci-dessous)<br><br>
					</p>

					<img src="images/mcd.png" width="600" height="400">

					<p>
						Construction MLD :
						Afin de pouvoir ensuite procéder à l’élaboration du code  SQL , j’ai transformé le schéma précédent en MLD. Je devais cependant garder les liens entre les tables et mettre en place le système de clés primaires et étrangères.<br><br>
					</p>
					

					<img src="images/mld.png" width="600" height="400">

					<p>
						Construction de la base de données : 
						J’ai créé un script SQL que j’ai ensuite importé dans le SGBD PHPMyAdmin, grâce à la fonction IMPORT. Une fois le script transmis au SGBD, je dispose d’un interface graphique me permettant de gérer mes tables de données graphiquement.<br><br>
					</p>	
					
					<img src="images/mysql.png" width="600" height="400">

					<p>

						<br><br><strong>Compétences associés : </strong><br>
						C4.1.5.1 Choisir les éléments de la solution à prototyper 
						C4.1.7.4 Utiliser des composants d’accès aux données<br>
						C4.1.3.1 Modéliser le schéma de données nécessaire à la mise en place de la solution applicative  
					</p>
				</div>




				<h3>conformité W3C</h3>
				<div>
					<p>
						Afin de repartir sur du code conforme aux normes, j’ai vérifié que les codes sources, rédigés lors du stage précédent, étaient bien conformes aux réglementations W3C, le résultat fut positif.
					</p><br>

					<img src="images/w3c.png" width="600" height="400">

					<p>
						<br><br><strong>Compétences associés : </strong><br>
						C4.1.8.1 Élaborer et réaliser des tests unitaires
					</p>
				</div>




				<h3> Mise en place de la version V2.0.0</h3>
				<div>
					<p>
						Afin d’être sûr que tout fonctionne correctement, que l’affichage soit correct, que les documents soient à jour (MLD,MCD,plan du iste,...),que les dernières fonctionnalités soient présentes, j’ai décidé de mettre en place un système de gestion de version. Cette V.2.0.0 recensera toute les idées citées précédemment. Ces idées sont recensées dans un fichier .txt   <br><br>

						J’ai donc mis à jour les documents tels que le MLD et le MCD cause des nouvelles tables ajouté et à venir. <br><br>

					</p>

					<img src="images/v2.png" height="400" width="600">

					<p>


						<br><br><strong>Compétences associés : </strong><br>
						C4.2.4.1 Repérer les éléments de la documentation à mettre à jour<br>
						C3.2.2.1 Élaborer une procédure de remplacement ou de migration respectant la continuité d’un service<br>
						C5.1.1.2 Paramétrer une solution de gestion des éléments d’une configuration <br>

					</p>
				</div>


				<h3>Veille technologique</h3>
				<div>
					<p>
						Afin de correspondre aux lois concernant les sites internet , je me suis rendu sur un site du gouvernement français afin de connaître les obligations concernant les mentions légales d’un site. J’ai alors créé une page web recensant toutes ces informations.

						• Problème rencontré : 
						Je ne trouvais pas l’adresse de l’hébergeur web qui est un champs obligatoire

						• Solution trouvée : 
						J’ai donc du rappeler l’assistance afin de leur demander cette information	
					</p>

					<img src="images/mentions.png" width="600" height="300">

					<p> 
						Afin de faire en sorte que le système de téléversement mis en place la veille soit bien fonctionnel, j’ai du apprendre à utiliser FileStyle du langage Bootstrap. Je ne connaissais pas du tout cette pratique et de nombreux tutoriels m’ont appris comment utiliser ce dernier. J’ai alors obtenu un système de téléversement de fichier fonctionnel respectant un type de fichier donné, une taille maximale, etc.

						<br><br><strong>Compétences associés : </strong><br>
						C5.2.2.4 Synthétiser et diffuser les résultats d'une veille <br>
						C5.2.4.1 Se documenter à propos d‘une technologie, d’un composant, d’un outil ou d’une méthode 
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

</section>

<section id="langage">
	<h1>Langages utilisés :</h1>

	<a target="_blank" href="https://www.w3schools.com/html/">
		<img src="images/htmlLogo.png" width="100" height="100" alt="html">
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

	<a  target="_blank" href="https://www.w3schools.com/bootstrap/">
		<img src="images/bootstrap.png" width="100" height="100" alt="Bootstrap">
	</a>
</section>

<section id="rencontre">

	<h1>Personne(s) rencontrée(s) :<br></h1>
	<p> M.PERSON : Directeur du groupe <br>
		M.GIOT : (Directeur Adjoint du lycée / collège)<br>   
		M.HOFFMANN :  (Informaticien, administrateur Réseau)<br>
		Assistance 1&1 : pour l’aide au mail non-désirable 
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
