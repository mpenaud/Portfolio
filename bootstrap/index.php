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
						<li><a  class="retour" href="../#veilleTechnologique"><span class="glyphicon glyphicon-arrow-left"></span>RETOUR</a></li>
					</ul>

				</div>
			</div>
		</nav>

		<section id="intitule">
			<div class="container-fluid">
				<div class="heading">
					<h1>Bootstrap</h1>
					<h3>Veille Technologique</h3>

				</div>
			</div>
		</section>

		<section id="text">
			<div class="row">
				<div class="col-lg-12">
					<div class="body">
						<section id="contenu">
							<h2>Description de Bootstrap : </h2>
							<p>
                                Bootstrap est un élément développé par <a href="https://twitter.com/">Twitter</a>. Sa Première version à été créée en 2011, et atteint aujourd'hui la veriosn 4.3.1. Il s'agit de l'un des projet GitHub les plus populaire de la plateforme. <br><br>

                                Bootstrap est un ensemble d'outils contenant des codes HTML , CSS ou encore Javascript. Et est utilisé pricipalement pour la création du design (graphisme, animation et interactions avec la page dans le navigateur, etc.) de sites et d'applications Web.

                                Bootstrap est une vraie révolution dans le domaine informatique car il a permit  de fusionner plusieurs bibliothèques déjà existante en 1 seule gratuitement or les anciennes était extremement chères.
                            </p>

                            <br><br>
                            <br><br>
                            <br><br>

                            <h2>Foncitonnement de Bootstrap : </h2>
                            <p>Si Bootstrap propose de nombreuses autres fonctionnalités comme les boutons personnalisés, les carroussels ou encore les modals plus simple à coder, il s'avère qu'il est pricipalement utilisé pour son Grid System. <br> Le Grid system permet de divisé une page internet en 12 colonnes selon la résolution de l'appareil utilisé. 

                                En demandant que l'on affiche un élément sur 3/12 sur un téléphone et 8/12 sur ordinateur, Bootstrap permet d'adapater un site internet sur n'importe quel support utilisé, on appelle cela la responsivité. 
                            </p><br><br>

                            <img src="images/bootstrap.png" alt=" accueil e-commerce" width="1400" height="800" style="margin: 0 auto"><br><br>



                            <p>De plus, le system de carroussel est vraiment plus simple avec Bootstrap que sans ce dernier. En effet, il suffit de quelques ligne pour créer un magnifique diaporama contre des centaines en temps normal. Cela permet de gagner du temps tout en étant aussi qualitatif<br><br>

                            Voici un exemple de carroussel : </p>

                            <div class="container">
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



                            <p>LBootstrap est également connu pour ses boutons prédéfinis et ses glyphicon. Les glyphicon sont des icones situées dans une bibliothèque d'image permettant d'embellir un site web <br>
                                <br>

                            voici quelques glyphicons : </p><br><br>


                            <img src="images/glyphicons.jpg" alt="e-commerce" width="400" height="400" style="margin: 0 auto"><br>


                        </section>

                        <section id="rencontre">

                           <h1>Résultat<br></h1>
                           <h4 style="text-align: center;">L'application sur laquelle vous êtes est entièrement développé avec l'outils Bootstrap. Si vous réduissez la page tout s'adaptera. <br> De plus, vous pouvez retrouver de nombreux carousels ou glyphicon sur cette plateforme Web.
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
