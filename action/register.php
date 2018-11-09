<!DOCTYPE html>
<html>

<head>
	<title>M'inscrire</title> 
</head>


<body>
	<br><br>
	<div class="newCompte">
	<h1>Créer un nouveau compte</h1>
    </div>
	<div style="width:400px;height:692px ;border-radius: 10px;margin:auto;background-color: lavender ;">
		<form method="post">
			<div class ="Entrer1">
				<label> <br>Pseudo: <br><input type="text" name="pseudo"/></label><br/><br>
				<label> Prénom:<br> <input type="text" name="prenom"/></label><br/><br>
				<label> Nom: <br><input type="text" name="nom"/></label><br/><br>
				<label> Telephone: <br><input type="number" placeholder="0600000000" name="telephone"/></label><br/><br>
				<label> Numero: <br><input type="number" placeholder="518" name="numero"/></label><br/><br>
				<label> Adresse: <br><input type="text" placeholder="Rue des Capucines" name="adresse"/></label><br/><br>
				<label> Code Postal: <br><input type="text" placeholder="59000" name="codePostal"/></label><br/><br>
				<label> Ville: <br><input type="text" placeholder="Lille" name="ville"/></label><br/><br>
				<label> Mot de passe: <br><input type="password" name="passe"/></label><br/><br>
				<label> Confirmation du mot de passe:<br> <input type="password" name="passe2"/></label><br/><br>
				<label> Adresse e-mail: <br><input type="text" name="email"/></label><br/><br>
				<div class="Inscription">
					<input type="submit" value="S'inscrire" onclick="addNewUser()" />
				</div>
			</div>
		</form>
	</div>
</body>

</html>

