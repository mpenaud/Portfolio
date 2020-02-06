$(function(){

	$(".navbar a, footer a").on("click", function(event){
		
		event.preventDefault();
		var hash = this.hash;

		$('body,html').animate({scrollTop: $(hash).offset().top} , 900 , function(){window.location.hash = hash;})
	});

	$('#myNavbar a').on("click", function(){
		$('#myNavbar').collapse('hide');
	});
})


function stage1() {
    // instanciation d'un objet XMLHttpRequest
    var xhr = new XMLHttpRequest();
    // on associe un traitement à l'événement onreadystatechange
    // on utilise ici une fonction anonyme
    xhr.onreadystatechange = function() {
        // gestion de la réponse du serveur (requête traitée et réponse prête (4) et status OK (200))
        if (xhr.readyState==4 && xhr.status==200) {
            // modification du contenu de la page web
            document.getElementById("stage").innerHTML = xhr.responseText; 
        }
    }
    
    // préparation de la requête HTTP (ici la méthode GET, nouveau_texte.txt est la ressource demandée et true signifie mode asynchrone (on n'attend pas la réponse du serveur))
    xhr.open("GET", "stage1.php", true); 
    
    // envoi de la requête HTTP
    xhr.send();
}




function stage2() {
    // instanciation d'un objet XMLHttpRequest
    var xhr = new XMLHttpRequest();
    // on associe un traitement à l'événement onreadystatechange
    // on utilise ici une fonction anonyme
    xhr.onreadystatechange = function() {
        // gestion de la réponse du serveur (requête traitée et réponse prête (4) et status OK (200))
        if (xhr.readyState==4 && xhr.status==200) {
            // modification du contenu de la page web
            document.getElementById("stage").innerHTML = xhr.responseText; 
        }
    }
    
    // préparation de la requête HTTP (ici la méthode GET, nouveau_texte.txt est la ressource demandée et true signifie mode asynchrone (on n'attend pas la réponse du serveur))
    xhr.open("GET", "stage2.php", true); 
    
    // envoi de la requête HTTP
    xhr.send();
}



$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    
    next.children(':first-child').clone().appendTo($(this));
  }
});