<!DOCTYPE html>
<html lang="fr">

<head> 
	 <link rel="stylesheet" media="screen" type="text/css" title="ProjetWeb" href="ccsprojet.css"/>
</head>

<body>
	<ul>
		<li><a href="ProjetWebPageAccueil.php">Accueil</a></li>
		<li><a href="ProjetWebPagePanier.php">Panier</a></li>
		<li><a href="ProjetWebRecherche.php">Recherche</a></li>
		<div class="login-container">
			<form action="/action_page.php">
				<input type="text" placeholder="Username" name="username">
				<input type="text" placeholder="Password" name="psw">
				<button type="submit">Login</button>
			</form>
		</div>
		<div class="login-container">
			<form action="/action_page.php">
				<button type="submit"><a href="inscription.php">NewAccount</a></button>
			</form>
		</div>
	</ul>
</body>

</html>