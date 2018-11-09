<!DOCTYPE html>



<html lang="fr">

<body>
	<ul class="header">
		<li class="link"><a class="textlink" href="index.php?page=main">Accueil</a></li>
		<li class="link"><a class="textlink" href="index.php?page=cartDisplay">Panier</a></li>
		<li class="link"><a class="textlink" href="index.php?page=searchProduct">Recherche</a></li>
		<div class="login-container">
			<form>
				<input type="text" placeholder="Username" name="username">
				<input type="text" placeholder="Password" name="psw">
				<button type="submit"><a href="index.php?page=checkUser">Connexion</a></button>
			</form>
		</div>
		<div class="login-container">
			<form>
				<button type="submit"><a href="index.php?page=register">S'inscrire</a></button>
			</form>
		</div>
	</ul>
</body>

</html>