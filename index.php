<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);


	if(!empty($_POST["send"])) {
		
		if(isset($_POST["username"]) && isset($_POST["userEmail"]) && isset($_POST["phone"]) && isset($_POST["content"])) {
			$name = $_POST["username"];
			$email = $_POST["userEmail"];
			$phone = $_POST["phone"];
			$content = $_POST["content"];
			$subject = "Demande d'inforation de la part d'un visiteur";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Taxi </title>
		
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

		<!-- ajout des fichiers css  -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
	</head>
	<body>

		<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="#"> Taxi Viano 7 Places </a>
		  
			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			  <ul class="navbar-nav mr-4">
					<li class="nav-item"> <a class="nav-link" data-value="about" href="#about"> Votre chauffeur</a> </li>
					<li class="nav-item"> <a class="nav-link " data-value="moves" href="#moves">Déplcacements</a> </li>
					<li class="nav-item"> <a class="nav-link " data-value="reservation" href="#reservation"> Réservation </a> </li>
					<li class="nav-item"> <a class="nav-link " data-value="Contact" href="#Contact">Contact</a> </li>
					<li class="nav-item"> <a class="nav-link " data-value="Contact" href="#Contact"> <i class="fas fa-mobile-alt"></i> 00.00.00.00.00 </a> </li>
				</ul> 
			</div>
		  </nav>

		<!-- L'entete -->
		<header class="header">
			<div class="overlay"></div>
				<div class="container">
					<div class="description row" >
						<h1 class="col-lg-6 col-md-8 col-sm-12 description_col_1">
							Bienvenue
							<p>
								Pour obtenir un dévis, cliquez sur le bouton ci-dessous
							</p>
							<button class="btn btn-outline-secondary btn-lg debit_button"> Obtenir un dévis </button>
						</h1>
						<div class="col-lg-6 col-md-12 col-sm-12 description_col_2">
							<img src="images/pngfuel.png" class="car img-fluid">
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="card mb-3 disponibilite_one" style="max-width: 400px;">
			<div class="row no-gutters">
				<div class="col-md-4 al">
					<img src="images/schedule.svg" class="card-img watch" alt="...">
				</div>
				<div class="col-md-8">
					<div class="card-body dispo_corps">
						<div class="dispo_corps_text">
							<h5 class="card-title"> Disponible</h5>
							<p class="card-text font-weight-bold">
								24h/24 7j/7
							</p>
						</div>
						<p class="card-text debit_button"><small class="text-muted"> 
							<button class="btn btn-outline-secondary btn-lg"> En savoir plus </button </small>
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Lieux -->
		<div class="info_taxi" id="moves">
			<h1 class="text-center">Vos déplacements </h1>
			<div class="container">
				<div class="row">
					<div id="carouselExampleCaptions" class="carousel slide col-lg-6 col-m-6 col-sm-12" data-ride="carousel">
						<ol class="carousel-indicators">
						<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="images/events.jpg" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
								<h5>First slide label</h5>
								<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/night-flight.jpg" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
								<h5>Second slide label</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/toureffeil.jpg" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
								<h5>Third slide label</h5>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
					<div class="col-lg-6 col-m-6 col-sm-12">
						<ul class="list-unstyled">
							<li class="media">
							<img class="image_serv img-fluid" src="images/local_airport.svg" class="mr-3" alt="...">
							<div class="media-body">
								<h5 class="mt-0 mb-1">Professionel</h5>
								Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
							</div>
							</li>
							<li class="media my-4">
							<img class="image_serv img-fluid" src="images/emoji_events.svg" class="mr-3" alt="...">
							<div class="media-body">
								<h5 class="mt-0 mb-1">Évènnementiel</h5>
								Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
							</div>
							</li>
							<li class="media">
							<img class="image_serv img-fluid" src="images/museum.svg" class="mr-3" alt="...">
							<div class="media-body">
								<h5 class="mt-0 mb-1">Touristique</h5>
								Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
							</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>



		<!-- A propos de moi -->
		<div class="about" id="about">
			<div class="container">
			  <h1 class="text-center"> Qui suis-je ? </h1>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12">
						<img src="images/team-3.jpg" class="img-fluid">
						<span class="text-justify">S.Web Developer</span>
					</div>

					<div class="col-lg-8 col-md-8 col-sm-12 desc">
						<h3>Nom Prénom</h3>
						<p>
							ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<div class="competence">
							<div class="card competence_card">
								<img class="card-img-top" src="images/smilling.jpg" alt="Card image cap">
								<div class="card-body">
									<p class="card-text competence_title"> Relationnel </p>
								</div>
							</div>
							<div class="card competence_card">
								<img class="card-img-top" src="images/business_man.jpg" alt="Card image cap">
								<div class="card-body">
									<p class="card-text competence_title"> Serieux </p>
								</div>
							</div>
							<div class="card competence_card">
								<img class="card-img-top" src="images/watch.jpg" alt="Card image cap">
								<div class="card-body">
									<p class="card-text competence_title"> Ponctuel </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--- info -->

		<!--div class="container bg-overlay"-->   
		<div class="info_sup">
		    <div class="container">
                <div class="card card-nav-tabs tab_card">
                    <div class="card-header card-header-primary tab_card_heard">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item"> <a class="nav-link active" href="#Contact" data-toggle="tab"> <span class="material-icons"> contact_mail </span>  Contact  </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="#messages" data-toggle="tab"> <i class="material-icons">place</i> Où suis-je ? </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="#reservation" data-toggle="tab">  <i class="material-icons">event_available</i> reservation  </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                	<div class="card-body car_body">
                    	<div class="tab-content text-center">
	                        <div class="tab-pane active" id="Contact">
	                            <div class="contact-form">
									<div class="container">
										<form id="formulaire" action="" method="post">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-12">
												  <h1> Me contacter </h1>	
												</div>
												<div class="col-lg-8 col-md-8 col-sm-12 right">
												   <div class="form-group">
												   	 <input type="text" class="form-control form-control-lg" placeholder="Prénom Nom" id="username" name="username">
												   </div>
												   <div class="form-group">
												   	 <input type="email" class="form-control form-control-lg" placeholder="Adresse email" id="userEmail" name="userEmail">
												   </div>
												   <div class="form-group">
												   	 <input type="text" class="form-control form-control-lg" placeholder="Téléphone" id="phone" name="phone">
												   </div>
												   <div class="form-group">
												   	 <textarea class="form-control form-control-lg" id="content" value = "scdfg" name="content"> </textarea>
												   </div>
												   <input type="submit" class="btn btn-secondary btn-block" id="Submit" value="Envoyez" name="send">
												</div>
											</div>
											<div id="error_message" style="width:100%; height:100%; display:none; ">
												<h4>Error</h4>
												Sorry there was an error sending your form.
											</div>
											<div id="success_message" style="width:100%; height:100%; display:none; ">
												<h2>Success! Your Message was Sent Successfully.</h2>
										   	</div>	
										</form>
									</div>
								</div>
	                        </div>
	                        <div class="tab-pane" id="messages">
	                            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21091.709469788195!2d2.2485039259728707!3d48.63924417304909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5d9dc326d8fdd%3A0x40b82c3688b43c0!2s91310%20Montlh%C3%A9ry!5e0!3m2!1sfr!2sfr!4v1595101448743!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</div>
	                        <div class="tab-pane" id="reservation">
	                        	<div class="reservation_card_container">
									<div class="card reservation_card">
										<i class="material-icons">event_available</i> 
										<div class="card-body reservation_card_container_body">
											<h5 class="card-title">Réservation : </h5>
											<p class="card-text"> Par téléphone: 00.00.00.00.00 </p>
										</div>
									</div>
									<div class="card reservation_card">
									    <span class="material-icons">timer</span>
									    <div class="card-body">
											<h5 class="card-title">Disponible : </h5>
											<p class="card-text">24h/24 7j/7</p>
									    </div>
									  </div>
								</div>
	                            <div class="team" id="team">
								<div class="container">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 item">
												<img src="images/team-2.jpg" class="img-fluid" alt="team">
												<div class="des">
												 	Transports privés
												 </div>
												<span class="text-muted">Transports privés</span>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-12 item">
												<img src="images/team-3.jpg" class="img-fluid" alt="team">
												<div class="des">
												 	 Evènementiels
												 </div>
												<span class="text-muted">Evènementiels</span>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-12 item">
												<img src="images/team-2.jpg" class="img-fluid" alt="team">
												<div class="des">
												 	Professionnels 
												 </div>
												<span class="text-muted">Professionnels</span>
											</div>
											<div class="col-lg-3 col-md-3 col-sm-12 item">
												<img src="images/team-3.jpg" class="img-fluid" alt="team">
												 <div class="des">
												 	Touristiques
												 </div>
												<span class="text-muted">Touristiques</span>
											</div>
										</div>
								</div>
							</div>

	                        </div>
                        </div>
                    </div>
                </div>
			</div>
		 </div> 
		<!--/div-->

		<a class="top-link hide" href="" id="js-top">
		  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M12 6H0l6-6z"/></svg>
		</a>
		<!---- footer --->
		<footer class="page-footer font-small special-color-dark pt-4">
			<div class="container">
				<ul class="list-unstyled list-inline text-center">
					<li class="list-inline-item"> <a class="btn-floating btn-fb mx-1"> <i class="fab fa-facebook-f"> </i></a> </li>
					<li class="list-inline-item"> <a class="btn-floating btn-tw mx-1"> <i class="fab fa-twitter"> </i> </a> </li>
					<li class="list-inline-item"> <a class="btn-floating btn-gplus mx-1"> <i class="fab fa-google-plus-g"> </i> </a> </li>
					<li class="list-inline-item">  <a class="btn-floating btn-li mx-1"> <i class="fab fa-linkedin-in"> </i> </a> </li>
					<li class="list-inline-item"> <a class="btn-floating btn-dribbble mx-1"> <i class="fab fa-dribbble"> </i> </a> </li>
				</ul>
			</div>

			<!-- Copyright -->
			<div class="footer-copyright text-center py-3"> Contacter le développeur
				<a href="https://mdbootstrap.com/"> mamadouniakate10@yahoo.fr </a>
			</div>
		</footer>

		<!-- Ajout des fichiers Javasscript -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src='js/main.js'></script>
	</body>
</html>