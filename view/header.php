<!DOCTYPE html>
<html lang="fr">

<head> 
	 <link rel="stylesheet" media="screen" type="text/css" title="ProjetWeb" href="../ccsprojet.css"/>
</head>

<body>
	<ul>
		<li><a href="index.php?page=accueil">Accueil</a></li>
		<li><a href="index.php?page=cartDisplay">Panier</a></li>
		<li><a href="index.php?page=search">Recherche</a></li>
		<div class="login-container">
			<form>
				<input type="text" placeholder="Username" name="username">
				<input type="text" placeholder="Password" name="psw">
				<button type="submit">Connexion</button>
			</form>
		</div>
		<div class="login-container">
			<form>
				<button type="submit"><a href="inscription.php">S'inscrire</a></button>
			</form>
		</div>
	</ul>
</body>

</html>