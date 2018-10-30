<html>

<head>
	<title>Mon e-commerce fiche produit</title>
</head>

<body>
	<?php

	//Affichage des différents produits
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
						<input type="submit" value="Ajouter au panier" >
					</div>
				</li>
			</div>
		</div>
		<?php
	}
	
	?>
</body>

</html>