<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	<main class="container">
		<div class="row justify-content-between">
			<div class="col-5" id="blocleft">
				<div id="msgconfirmup" class="row justify-content-center">
					<p>Votre fichier {{$transfer->real_name}} a bien été envoyé.</p>
				</div>
				<div class="row justify-content-center">
					<a href="{{route('home')}}"><button id="btnagain" type="button" class="btn btn-dark">Envie d'envoyer<br>un autre fichier ?</button></a>
				</div>
			</div>

			<div class="col-6" id="blocright">
				<div class="row justify-content-center">
					<img src="http://via.placeholder.com/150x150" id="logo">
					<p>
						Blabla de présentation du service.

						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris felis nisi, porta eu augue vitae, scelerisque ultricies velit. Vestibulum eu vehicula ante, cursus accumsan tellus. Etiam ut neque venenatis, auctor est ac, molestie felis. Vivamus vitae lorem nulla. Aenean in fringilla risus. Fusce bibendum vitae massa vitae porttitor. Mauris fringilla tortor ac erat ullamcorper, a malesuada justo auctor. Aenean sit amet neque varius, malesuada mauris sit amet, malesuada nisi.
					</p>
				</div>
			</div>
		</div>
	</main>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>