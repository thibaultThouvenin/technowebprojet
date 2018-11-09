<html>

<head>
	<title>Mon e-commerce fiche produit</title>
</head>

<body>
	<?php

	//Affichage des diffÃ©rents produits
	$listOfProducts = $bdd->query('SELECT * FROM products');
	while ($productData=$listOfProducts->fetch())
	{
		?>
		<div class="textProduitEntete">
			<h1><?php echo $productData['name']; ?></h1>
		</div>
		<div id="col">
            <div class="affichageproduit">
                <li>
					<?php echo '<img src="'.$productData['url_photo'].'" width="200" height="200" alt=""/>'; ?>
				</li>
                <li>
					<p><?php echo $productData['description']; ?></p>
                </li>
                <li>
                    <div class="prix"> <?php echo $productData['unit_price']; ?> &euro;</div>
					<div class="ajouteraupanier">
						<form action="action/addToCart.php" method="post" name="addToCart">
						<input type="submit" value="Ajouter au panier" name="ajouteraupanier" >
						<input type="text" placeholder="Quantité" name="quantity">
						<input type="hidden" name="order" value="orderID">
						<input type="hidden" name="produit" value="<?php $productData["id"] ?>">
						</form>
					</div>
				</li>
			</div>
		</div>
		<?php
	}
	
	?>
</body>

</html>