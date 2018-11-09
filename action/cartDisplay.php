<html>
<br><br><br>
<?php echo $_GET['page']; ?>

<head>
	<title> Votre panier </title>
</head>

<body>
	<?php

	//Affichage des différents produits
	$listOfProducts = $bdd->query('SELECT * FROM order_products,products WHERE order_products.product_id=products.id');
	while ($productData=$listOfProducts->fetch())
	{
		?>
		<div class="textProduitEntete">
			<h1><?php echo $productData['name']; ?></h1>
		</div>
		<div id="col">
            <div class="affichageproduit">
                <li>
					<?php echo '<img src="'.$productData['url_photo'].'" width="120" height="120" alt=""/>'; ?>
				</li>
                <li>
					<p><?php echo $productData['name']; ?></p>
                </li>
                <li>
                    <div class="prix"> <?php echo $productData['unit_price']; ?> &euro;</div>
					<div class="Retirer du panier">
						<input type="submit" value="Retirer du panier" name="retirerdupanier" >
						
						// RECUPERER LINFO QD LE BOUTON EST APPUYER
						<?php 
						if(!empty($_POST['retirerdupanier']) AND $_POST['retirerdupanier']=='Retirer du panier')
							include("action/deleteFromCart.php");
						?>

					</div>
				</li>
			</div>
		</div>
		<?php
	}
	
	?>
</body>






//Affiche tous les produits du panier
<?php
$listOfOrders = $bdd->query('select o.* from orders o where o.user_id = :userId;');
?>