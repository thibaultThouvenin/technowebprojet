<!DOCTYPE html>
<html>

<head>
	<title>M'inscrire</title> 
	<link rel="stylesheet" media="screen" type="text/css" title="ProjetWeb" href="styleInscription.css"/> 
</head>


<body>
	<?php include("header.html") ?>
	<br><br>
	<h1>Créer un nouveau compte</h1>
	<div style="width:400px;height:692px ;border-radius: 10px;margin:auto;background-color: lavender ;">
		<form method="post">
			<div class ="Entrer1">
				<label> <br>Pseudo: <br><input type="text" name="pseudo"/></label><br/><br>
				<label> Prénom:<br> <input type="text" name="Prenom"/></label><br/><br>
				<label> Nom: <br><input type="text" name="nom"/></label><br/><br>
				<label> Telephone: <br><input type="number" placeholder="0600000000" name="Telephone"/></label><br/><br>
				<label> Numéro: <br><input type="number" placeholder="518" name="Numéro"/></label><br/><br>
				<label> Adresse: <br><input type="text" placeholder="Rue des Capucines" name="Adresse"/></label><br/><br>
				<label> Code Postal: <br><input type="text" placeholder="59000" name="Code Postal"/></label><br/><br>
				<label> Ville: <br><input type="text" placeholder="Lille" name="Ville"/></label><br/><br>
				<label> Mot de passe: <br><input type="password" name="passe"/></label><br/><br>
				<label> Confirmation du mot de passe:<br> <input type="password" name="passe2"/></label><br/><br>
				<label> Adresse e-mail: <br><input type="text" name="email"/></label><br/><br>
				<div class="Inscription">
					<input type="submit" value="S'inscrire"/>
				</div>
			</div>
		</form>
	</div>
</body>

</html>