<html>

<head>
</head>

<body>
	<?php

	//Affichage des différents produits
	$listOfProducts = $bdd->query('SELECT * FROM products');
	while ($productData=$listOfProducts->fetch())
	{
		echo $productData['name'];
		echo '<img src="'.$productData['url_photo'].'" width="100" height="100" alt=""/>';
		echo $productData['description'];
	}

	?>
</body>

</html>