<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<header id="Header">
		<nav class="navbar navbar-expand-lg navbar-dark">
		  <div class="container-fluid">
			<a class="navbar-brand" href="index.html"><h1 class="display-3 titre ">Caroline Martinez</h1></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pt-3">
				<li class="nav-item"><a class="spacing walbaum_light nav-link active ps-5 pe-5 fs-5 " href="services.html"> Services </a></li>
				<li class="nav-item"><a class="spacing walbaum_light nav-link active ps-5 pe-5  fs-5 " href="apropos.html"> A propos </a></li>
				<li class="nav-item"><a class="spacing walbaum_light nav-link active ps-5 pe-5  fs-5 " href="contact.php">Contact</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
	</header>
		<div id="image" class="contact">
		</div>
		<div class="container-fluid container_contact">
		<div class="row bandeau_contact">
				<div class="col-12 col-lg-7 d-flex justify-content-center justify-content-lg-end align-items-center mt-5 mt-lg-0 mb-lg-5 pb-lg-5 ">
					<p style="max-width:720px" class="texte_accueil text-center text-lg-start walbaum_light fs-5 pb-lg-5 pe-xxl-5 me-xxl-5 "> <span class="fs-3"> CONTACT </span> <br><br> Pour une proposition de services complètement adaptée à vos besoins, veuillez s’il vous plait remplir ce formulaire. Nous reviendrons vers vous dans les plus brefs délais.</p>
				</div>
				<div class="col-12 col-lg-5 d-flex align-items-center justify-content-center justify-content-xxl-start pt-5 pb-5">
				<form id="formulaire">
				<div>
				  <label for="Nom" class="form-label"></label>
				  <input type="Nom" class="form-control" id="Nom" name='Nom' placeholder="Nom">
				</div>
				<div>
				  <label for="Prenom" class="form-label"></label>
				  <input type="Prenom" class="form-control" id="Prenom" name='Prenom' placeholder="Prenom">
				</div>
				<div>
				  <label for="Entreprise" class="form-label"></label>
				  <input type="Entreprise" class="form-control" id="Entreprise" name='Entreprise' placeholder="Entreprise">
				</div>
				<div>
				  <label for="Email" class="form-label"></label>
				  <input type="Email" class="form-control" id="Email" name='Email' placeholder="Email">
				</div>
				<div>
				  <label for="Sujet" class="form-label"></label>
				  <input type="Sujet" class="form-control" id="Sujet" name='Sujet' placeholder="Sujet">
				</div>
				<div>
				  <label for="Message" class="form-label"></label>
				  <textarea class="form-control" id="Message" rows="3" name='Message' placeholder="Message"></textarea>
				</div>
				<div class="py-4 walbaum_light ">
					<input type="checkbox" id="check">
					En soumettant ce formulaire, je prends <br> connaissance que les informations declarées <br> dans celui-ci soient utilisées pour permettre <br> de me recontacter. 
				</div>
				<div class="mb-3 mt-3 text-center">
					<button type="submit" class="disabled ps-5 pe-5 fs-5 me-5 walbaum_light" id="bouton">Envoyer</button>
				</div>
				</form>
				</div>
		</div>
		</div>


		<footer>
		<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-sm-6 col-md-4 walbaum_light mt-5 text-center "><h3 class="mt-3 fs-5">Ils lui font confiance</h3><img class="mt-4 " src="img/ImageCRU.jpeg" alt="Logo de l'entreprise CRU "> <img class="mt-4 ms-2 " src="img/ImageBS.jpg" alt="Logo de l'entreprise backstage "></div>
			<div class="col-12 col-sm-6 col-md-4 walbaum_light spacing mt-5">
				<h3 class="mt-4 text-center authentic_signature display-5 "> Caroline Martinez </h3>
				<ul class="mt-4 text-center fs-5 ps-0">
					<li ><a href="index.html" alt="lien vers la page 'accueil' " >Accueil </a></li>
					<li ><a href="services.html" alt="lien vers la page 'services' " >Services </a></li>
					<li ><a href="apropos.html" alt="lien vers la page 'a propos' " >A propos </a></li>
					<li ><a href="contact.php" alt="lien vers la page 'contact' " >Contact </a></li>
				</ul>
			</div>
			<div class="col-12 col-sm-12 col-md-4 walbaum_light mt-5 text-center"><h3 class="mt-4 text-center fs-5 ">Suivez nous sur linkedin</h3><a href="https://www.linkedin.com/in/caroline-martinez-3a82b7a8/" target="_blank" ><i class="mt-5 fs-3 bi bi-linkedin" ></i></a></div>
		</div>
		<div class="row content_center"><hr class="footer_hr solid mt-5"></div>
		<div class="row EB_garamond_italic spacing "><div class="col"><p class="fs-5 text-center"><a class="text-white" href="mentionslegales.html">mentions légales</a></p></div></div>
		</div>
	</footer>
	
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    window.onscroll = function() {myFunction()};
    var header = document.getElementById("Header");
    var img = document.getElementById("image");
    var sticky = header.offsetTop ;

    function myFunction(){
      if (window.pageYOffset > sticky ) {
        header.classList.add("Header");
        img.classList.add("contactN");
      }else {
        img.classList.remove("contactN");
        header.classList.remove("Header");
      }
  }

  </script>
<script> 

$(document).ready(function () {
	$("#formulaire").submit(function(e) {
		e.preventDefault();
		var dataform = $(this).serialize();
		$.ajax({ 
			method : "POST",
			url : "ajax.php",
			data: dataform,
			dataType: "JSON",
			success: function(result){
				console.log(result);
				if (result.status === "error" ){
					alert(result.message);
				}else if (result.status === "ok"){
					alert(result.message);
				}
			}
		})		
	});
});


checkbox = document.querySelector('#check') ; 

 	checkbox.addEventListener('change',function(){
	submit = document.getElementById("bouton");
	if ( checkbox.checked){
		submit.classList.remove("disabled");
	}else {
		submit.classList.add("disabled");
	}
});

</script>
</html>
