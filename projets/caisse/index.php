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
					<h1>Projet Caisse Enregistreuse </h1>
					<h2>avec Java</h2>
					<h3>A réaliser en autonomie</h3>
				</div>
			</div>
		</section>

		<section id="text">
			<div class="row">
				<div class="col-lg-12">
					<div class="body">
						<section id="contenu">
							<h2>contexte du projet : </h2>
							<p>M. LEDUC vous demande d'écrire un logiciel permettant de gérer les deux caisses enregistreuses du magasin qui sont en réalité des PC tournant sous Linux Mint 19.2 équipés chacun d'une imprimante et d'un lecteur de code barre.<br><br>
							Il faut pouvoir pour chaque client qui se présente en caisse :<br>
							• créer un « passage en caisse » qui va regrouper les articles achetés par le client (les articles sont ajoutés les uns à la suite des autres ; la saisie des articles se fait grâce un lecteur de code barre (cependant il est possible de rentrer les codes en tapant leur numéro (un code barre pouvant être illisible)) ;<br>
							• mettre en attente et reprendre un passage en caisse (cas où le client a par exemple oublier un article) ;<br>
							• saisir le moyen de paiement (CB, chèque, espèce (dans ce cas, il faut gérer le rendu de monnaie)) ;<br>
							• permettre de faire une remise sur le total de la facture (en pourcentage ou en euros) ;<br>
							• imprimer le ticket de caisse ; <br>
							• annuler un passage en caisse.<br><br>

							Le logiciel doit :<br>
							 • pouvoir fonctionner indifféremment sur Windows ou Linux, vous utiliserez donc Java ;<br>
							 • être afficher en plein écran (full screen) ; <br>
							 • être utilisable sans clavier physique (donc il faut un clavier virtuel pour saisir les chiffres) car il doit être possible d'utiliser un écran tactile ;<br>

							</p>

							<br><br>
							<br><br>
							<br><br>

							<h2>Réalisation du projet : </h2>
							<p>Ce projet fonctionne via le langage de programmation JAVA. 
								Je dois donc créer une interface qui répond aux demande de monsieur LEDUC. Dans un premier temps, j'ai créé la base de données afin de liées la plateforme et la bases de données. <br> J'ai ensuite créé l'interface graphique en apprenant des nouvelles techniques grâce à des documentaitons internets. <br>

								Une fois l'interface finie, voici la structure qu'il retournait :  </p><br><br>

							
								<img src="images/caisse1.png" alt=" accueil e-commerce" width="1400" height="800" style="margin: 0 auto"><br><br>

							

							<p>Une fois l'interface graphique terminé, il faut que je configure ces options. Pour cela je fais appel a javais et à de la gestion d'évenement de souris. Grâce à cette méthode, j'ai pu créer toutes les options demander (attente/ reprise client, encaissement, affichage sous-total et rendu,...).<br><br>

							<img src="images/caisse2.png" alt="filtres "width="1400" height="800" style="margin: 0 auto"><br><br>

							<br><br>

							<p>Lorsqu'une personne est passé en caisse, il est possible de retrouver sa commande et d'imprimer son ticket </p><br><br>


							<img src="images/code.png" alt="e-commerce" width="1400" height="800" style="margin: 0 auto"><br>
							

						</section>

						<section id="rencontre">

							<h1>Résultat<br></h1>
							<h4 style="text-align: center;">j'ai obtenu l'application  conforme aux attentes et eu  la note de  <strong>19 / 20 </strong>
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
